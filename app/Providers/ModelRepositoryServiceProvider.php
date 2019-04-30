<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModelRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\ModelRepositoryInterfaces\UserInfoModelRepositoryInterface',
            'App\ModelRepositories\UserInfoModelRepository'
        );

        $this->app->bind(
            'App\ModelRepositoryInterfaces\UserModelRepositoryInterface',
            'App\ModelRepositories\UserModelRepository'
        );

        $this->app->bind(
            'App\ModelRepositoryInterfaces\WorkshopServiceModelRepositoryInterface',
            'App\ModelRepositories\WorkshopServiceModelRepository'
        );
    }
}
