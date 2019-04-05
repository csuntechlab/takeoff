<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class StudentInfoServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Contracts\StudentInfoContract', 'App\Services\StudentInfoService');
    }
}