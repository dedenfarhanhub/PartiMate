<?php

namespace PartiMate;

use Illuminate\Support\ServiceProvider;
class PartiMateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/partimate.php', 'partimate');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/partimate.php' => config_path('partimate.php'),
        ]);
    }
}