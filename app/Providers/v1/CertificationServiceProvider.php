<?php

namespace App\Providers\v1;

use App\Services\v1\CertificationService;
use Illuminate\Support\ServiceProvider;

class CertificationServiceProvider extends ServiceProvider
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
        $this->app->bind(CertificationService::class, function($app){
            return new CertificationService();
        });
    }
}
