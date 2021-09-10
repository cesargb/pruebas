<?php

namespace Descom\Skeleton;

use Descom\Skeleton\Console\Install;
use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'skeleton');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
              __DIR__.'/../config/config.php' => config_path('skeleton.php'),
            ], 'config');

            $this->commands([
                Install::class,
            ]);
        }
    }
}
