<?php

namespace App\Providers;

use App\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if(app()->isProduction()) {
            $this->app->singleton(
                UserRepositoryInterface::class,
                UserRepository::class
            );
        }else{
            $this->app->singleton(
                UserRepositoryInterface::class,
                UserRepository::class
            );
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
