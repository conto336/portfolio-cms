<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (App::environment(['staging', 'production'])) {
            URL::forceScheme('https');
        }


        if (env('APP_ENV') === 'production') {
            URL::forceSchema('https');
        }


        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }

        if (env('APP_FORCE_HTTPS', false)) {
            URL::forceScheme('https');
        }

        Paginator::useBootstrap();
    }
}
