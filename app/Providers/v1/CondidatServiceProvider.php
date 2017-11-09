<?php

namespace App\Providers\v1;

use App\Services\v1\CondidatService;
use Illuminate\Support\ServiceProvider;

class CondidatServiceProvider extends ServiceProvider
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
        $this->app->bind(CondidatService::class, function($app){
            return new CondidatService();
        });
    }
}
