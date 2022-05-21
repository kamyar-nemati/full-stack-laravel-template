<?php

namespace App\Helpers\Services\HttpCall;

use GuzzleHttp\Client                               as HttpClient;
use GuzzleHttp\Exception\BadResponseException       as HttpBadResponseException;
use GuzzleHttp\Exception\ClientException            as HttpClientException;
use GuzzleHttp\Exception\ConnectException           as HttpConnectException;
use GuzzleHttp\Exception\RequestException           as HttpRequestException;
use GuzzleHttp\Exception\ServerException            as HttpServerException;
use GuzzleHttp\Exception\TooManyRedirectsException  as HttpTooManyRedirectsException;
use GuzzleHttp\Exception\TransferException          as HttpTransferException;

use Error;
use Exception;
use stdClass;

class HttpCallBuilder
{
    private $endpoint;
    private $headers;
    private $body_raw;
    private $body_json;
    private $body_params;
    private $query_string;
    private $raw_response;
    private $process_response;
    private $last_exception;

    public function __construct(string $endpoint)
    {
        $this->endpoint             = $endpoint;
        $this->headers              = [];
        $this->body_raw             = '';
        $this->body_json            = [];
        $this->body_params          = [];
        $this->query_string         = [];
        $this->raw_response         = false;
        $this->process_response     = true;
        $this->last_exception       = null;
    }

    /**
     * Set headers to the HTTP call being made.
     *
     * @param array $headers The headers
     *
     * @return HttpCallBuilder
     */
    public function &withHeaders(array $headers) : HttpCallBuilder
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Set raw body to the HTTP call being made.
     *
     * @param string $body_raw The raw body contents
     *
     * @return HttpCallBuilder
     */
    public function &withBodyRaw(string $body_raw) : HttpCallBuilder
    {
        $this->body_raw = $body_raw;

        return $this;
    }

    /**
     * Set JSON body to the HTTP call being made.
     *
     * @param array $body_json The JSON body array
     *
     * @return HttpCallBuilder
     */
    public function &withBodyJson(array $body_json) : HttpCallBuilder
    {
        $this->body_json = $body_json;

        return $this;
    }

    /**
     * Set Form-Data parameters body to the HTTP call being made.
     *
     * @param array $body_params The Form-Data parameters array
     *
     * @return HttpCallBuilder
     */
    public function &withBodyParams(array $body_params) : HttpCallBuilder
    {
        $this->body_params = $body_params;

        return $this;
    }

    /**
     * Set Query-String to the HTTP call being made.
     *
     * @param array $query_string The Query-String array
     *
     * @return HttpCallBuilder
     */
    public function &withQueryString(array $query_string) : HttpCallBuilder
    {
        $this->query_string = $query_string;

        return $this;
    }

    /**
     * Return the response in raw without taking body contents.
     *
     * @return HttpCallBuilder
     */
    public function &withRawResponse() : HttpCallBuilder
    {
        $this->raw_response = true;

        return $this;
    }

    /**
     * Return the response without attempting to JSON-decoding. This has no affect if response is returned in raw.
     *
     * @return HttpCallBuilder
     */
    public function &withUnprocessedResponse() : HttpCallBuilder
    {
        $this->process_response = false;

        return $this;
    }

    /**
     * Make a GET HTTP call.
     *
     * @return mixed|null The response
     */
    public function makeGetCall()
    {
        return $this->call('GET');
    }

    /**
     * Make a POST HTTP call.
     *
     * @return mixed|null The response
     */
    public function makePostCall()
    {
        return $this->call('POST');
    }

    /**
     * Get the latest exception if any.
     *
     * @return Error|Exception|null The exception
     */
    public function getLastException()
    {
        return $this->last_exception;
    }

    /**
     * Get the latest exception object as string if any.
     *
     * @return string|null The exception object as string
     */
    public function getLastExceptionAsString() : ?string
    {
        if ( ! is_null($this->last_exception))
        {
            return $this->last_exception->__toString() ?? null;
        }

        return null;
    }

    /**
     * Get the latest exception's message string if any.
     *
     * @return string|null The exception message text
     */
    public function getLastExceptionMessage() : ?string
    {
        if ( ! is_null($this->last_exception))
        {
            return $this->last_exception->getMessage() ?? null;
        }

        return null;
    }

    /**
     * Get the latest exception's error content that is returned by the callee API.
     *
     * @return mixed|null The error returned by the callee API.
     */
    public function getLastExceptionError()
    {
        if ( ! is_null($this->last_exception))
        {
            try
            {
                $raw_error = $this->last_exception->getResponse()->getBody()->getContents() ?? null;

                if ( ! is_null($raw_error))
                {
                    return json_decode($raw_error);
                }
            }
            catch (Error | Exception $e)
            {
            }
        }

        return null;
    }

    private function call(string $method)
    {
        /*
         * Configure client payload
         */

        $payload = $this->configure();

        $configs = $payload->configurations;
        $options = $payload->options;

        /*
         * Attempt to make the call
         */

        try
        {
            // initialize client
            $client = new HttpClient($configs);

            // make the call
            $raw_response = $client->request($method, $this->endpoint, $options);

            if ($this->raw_response)
            {
                return $raw_response;
            }

            // retrieve response body contents
            $response_body = $raw_response->getBody();
            $response_contents = $response_body->getContents();

            // attempt to decode the response
            if ($this->process_response)
            {
                // attempt to decode data as JSON
                $response_object = json_decode($response_contents);

                if ( ! is_null($response_object))
                {
                    $response_contents = $response_object;
                }
            }

            return $response_contents;
        }
        catch (Error | Exception | HttpBadResponseException | HttpClientException | HttpConnectException | HttpRequestException | HttpServerException | HttpTooManyRedirectsException | HttpTransferException $ex)
        {
            $this->last_exception = $ex;
        }

        return null;
    }

    private function configure() : stdClass
    {
        $payload = (object)[];

        $payload->configurations = [];
        $payload->options = [];

        if (count($this->headers) > 0)
        {
            $payload->configurations['headers'] = $this->headers;
        }

        if (count($this->body_json) > 0)
        {
            $payload->configurations['json'] = $this->body_json;
        }

        if ( ! is_empty($this->body_raw))
        {
            $payload->options['body'] = $this->body_raw;
        }

        if (count($this->body_params) > 0)
        {
            $payload->options['form_params'] = $this->body_params;
        }

        if (count($this->query_string) > 0)
        {
            $payload->options['query'] = $this->query_string;
        }

        return $payload;
    }
}
