<?php

namespace App\Providers\v1;

use App\Pointage;
use App\Services\v1\PointageService;
use Illuminate\Support\ServiceProvider;

class PointageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PointageService::class, function($app){
            return new PointageService();
        });
    }
}
