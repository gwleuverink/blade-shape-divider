<?php

namespace Leuverink\BladeShapeDivider;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Leuverink\BladeShapeDivider\ShapeDivider;

class BladeShapeDividerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app['view']->addNamespace('shape-divider', __DIR__ . '/../components');

        Blade::component('shape-divider', ShapeDivider::class);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
