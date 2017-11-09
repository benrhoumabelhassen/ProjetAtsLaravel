<?php

namespace App\Providers\v1;

use App\Services\v1\CongeService;
use Illuminate\Support\ServiceProvider;

class CongeServiceProvider extends ServiceProvider
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
        $this->app->bind(CongeService::class, function($app){
            return new CongeService();
        });
    }
}
