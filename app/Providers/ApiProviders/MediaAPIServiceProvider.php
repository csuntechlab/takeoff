<?php
namespace App\Providers\ApiProviders;

use Illuminate\Support\ServiceProvider;

class MediaAPIServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\MediaAPIContract',
            'App\Services\MediaAPIService'
        );
    }
}