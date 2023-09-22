<?php

namespace Traefik;

use Illuminate\Support\ServiceProvider;

/**
 * Class ConfigServiceProvider
 */
class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider
     * 
     * @return void
     */
    public function register()
    {
        $this->app->singleton('traefik', Config::class);
    }
}
