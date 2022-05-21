<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\View\Composers\JavaScriptSessionStorageComposer;
use App\View\Composers\JavaScriptLocalStorageComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', JavaScriptSessionStorageComposer::class);
        View::composer('*', JavaScriptLocalStorageComposer::class);
    }
}
