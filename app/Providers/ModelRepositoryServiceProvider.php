<?php

//declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ModelRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\ModelRepositoryInterfaces\StudentInfoRepositoryInterface',
            'App\ModelRepositories\StudentInfoRepository'
        );
    }
}