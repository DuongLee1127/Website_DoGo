<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public $serviceBinding = [
        'App\Services\Interfaces\UserServiceInterface' =>
        'App\Services\UserService'
    ];
    public function register()
    {
        $this->app->bind(
            \App\Services\Interfaces\UserServiceInterface::class,
            \App\Services\UserService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
