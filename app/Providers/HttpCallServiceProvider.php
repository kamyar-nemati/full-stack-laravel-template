<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Helpers\Services\HttpCall\HTTPCallBuilder;

class HttpCallServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HTTPCallBuilder::class, function($app, $parameters)
        {
            $parameters = (object) $parameters;
            $endpoint   = $parameters->endpoint;

            return new HTTPCallBuilder($endpoint);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $resolver = app_path() . '/Helpers/Services/HttpCall/HttpCallResolver.php';

        require_once($resolver);
    }
}
