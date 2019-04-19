<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class UserInfoServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //
        parent::boot();
    }

    public function register()
    {
        $this->app->bind(
            'App\Contracts\UserInfoContract',
            'App\Services\UserInfoService');

        $this->app->bind(
            'App\Contracts\AdminContract',
            'App\Services\AdminService');
    }
}