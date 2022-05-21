<?php

namespace App\Helpers\Services\ApiResponse;

use App\Types\APIResponseObject;

class ApiResponseBuilder
{
    private $http_code;
    private $headers;
    private $status_code;
    private $data;
    private $message;

    public function __construct(int $status_code = -1)
    {
        $this->http_code    = null;
        $this->headers      = [];
        $this->status_code  = $status_code;
        $this->data         = null;
        $this->message      = null;
    }

    /**
     * Set HTTP Code
     *
     * @param int $http_code
     *
     * @return ApiResponseBuilder
     */
    public function &withHttpCode(int $http_code)
    {
        $this->http_code = $http_code;

        return $this;
    }

    /**
     * Set API headers
     *
     * @param array $headers
     *
     * @return ApiResponseBuilder
     */
    public function &WithHeaders(array $headers)
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Set API Status Code
     *
     * @param int $status_code
     *
     * @return ApiResponseBuilder
     */
    public function &withStatusCode(int $status_code)
    {
        $this->status_code = $status_code;

        return $this;
    }

    /**
     * Set API data
     *
     * @param mixed $data
     *
     * @return ApiResponseBuilder
     */
    public function &withData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Set API message
     *
     * @param string $message
     *
     * @return ApiResponseBuilder
     */
    public function &withMessage(string $message)
    {
        $this->message = $message;

        return $this;
    }

    public function &withAPIResponseObject(APIResponseObject $api_response)
    {
        $this->status_code = $api_response->status;

        if ( ! is_null($api_response->message))
        {
            $this->message = $api_response->message;
        }

        if ( ! is_null($api_response->data))
        {
            $this->data = $api_response->data;
        }

        return $this;
    }

    /**
     * Build API Response object
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function build()
    {
        $response = (object)[];

        if ( ! is_null($this->status_code))
        {
            $response->status = $this->status_code;
        }

        if ( ! is_null($this->data))
        {
            $response->data = $this->data;
        }

        if ( ! is_null($this->message))
        {
            $response->message = $this->message;
        }

        if ( ! is_null($this->http_code))
        {
            return response()->json($response, $this->http_code)->withHeaders($this->headers);
        }

        return response()->json($response)->withHeaders($this->headers);
    }
}
