<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRepositories();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    private function registerRepositories() : void
    {
        $this->app->bind(\App\Repositories\Interfaces\UserRepositoryInterface::class, \App\Repositories\UserRepository::class);
    }
}
