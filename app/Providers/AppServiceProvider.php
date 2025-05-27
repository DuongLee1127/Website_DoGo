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

    public function register()
    {
        $bindings = [
            \App\Services\Interfaces\UserServiceInterface::class => \App\Services\UserService::class,
            \App\Services\Interfaces\BaseServiceInterface::class => \App\Services\BaseService::class,
            \App\Services\Interfaces\PostServiceInterface::class => \App\Services\PostService::class,
            \App\Services\Interfaces\ProductServiceInterface::class => \App\Services\ProductService::class,
            \App\Services\Interfaces\OrderServiceInterface::class => \App\Services\OrderService::class,
        ];
        foreach ($bindings as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
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
