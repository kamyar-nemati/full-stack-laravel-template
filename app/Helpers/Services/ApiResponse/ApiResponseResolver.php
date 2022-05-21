<?php

use App\Helpers\Services\ApiResponse\ApiResponseBuilder;

use Illuminate\Support\Facades\App;

if ( ! function_exists('api_response'))
{
    /**
     * This function provides access to singleton
     * instance of ApiResponseBuilder object that
     * exists in App Service Container.
     *
     * @return ApiResponseBuilder
     */
    function api_response() : ApiResponseBuilder
    {
        return App::make(ApiResponseBuilder::class);
    }
}
