<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Remove or comment out any CORS-related code here
        // if ($this->app->environment('local')) {
        //     header('Access-Control-Allow-Origin: http://localhost:3000');
        //     header('Access-Control-Allow-Headers: *');
        //     header('Access-Control-Allow-Methods: *');
        // }
    }
}
