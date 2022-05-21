<?php

use App\Helpers\Services\HttpCall\HttpCallBuilder;

use Illuminate\Support\Facades\App;

if ( ! function_exists('http_call'))
{
    /**
     * This function provides access to instance
     * creation of HttpCallBuilder object that
     * exists in App Service Container.
     *
     * @param string $endpoint The URL/URI to the resource/API
     *
     * @return HttpCallBuilder
     */
    function http_call(string $endpoint) : HttpCallBuilder
    {
        $parameters = (object)[];
        $parameters->endpoint = $endpoint;

        return App::make(HttpCallBuilder::class, (array) $parameters);
    }
}
