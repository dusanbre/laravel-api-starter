<?php

namespace App\Providers;

use App\Modules\UserRole\Contracts\UserRoleServiceInterface;
use App\Modules\UserRole\Services\UserRoleServices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRoleServiceInterface::class, UserRoleServices::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::shouldBeStrict(app()->isLocal());
    }
}