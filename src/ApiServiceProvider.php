<?php

namespace SgiSoftware;

use \illuminate\support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/websockets.php' => config_path('api-config.php'),
        ], 'config');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/api-config.php',
            'api-config'
        );
    }
}