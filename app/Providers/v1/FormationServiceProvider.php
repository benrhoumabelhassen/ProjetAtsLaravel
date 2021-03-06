<?php

namespace App\Providers\v1;

use App\Services\v1\FormationService;
use Illuminate\Support\ServiceProvider;

class FormationServiceProvider extends ServiceProvider
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
        $this->app->bind(FormationService::class, function($app){
            return new FormationService();
        });
    }
}
