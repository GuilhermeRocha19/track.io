<?php declare(strict_types=1);

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
        match(app()->environment()) {
            'production' => $this->app->singleton(
                UserRepositoryInterface::class,
                UserRepository::class
            ),
            'local' => $this->app->singleton(
                UserRepositoryInterface::class,
                UserRepository::class
            ),
        };
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
