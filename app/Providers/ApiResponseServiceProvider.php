<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Helpers\Services\ApiResponse\ApiResponseBuilder;

class ApiResponseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ApiResponseBuilder::class, function()
        {
            return new ApiResponseBuilder();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $resolver = app_path() . '/Helpers/Services/ApiResponse/ApiResponseResolver.php';

        require_once($resolver);
    }
}
