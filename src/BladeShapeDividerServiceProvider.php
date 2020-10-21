<?php

namespace Leuverink\BladeShapeDivider;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Leuverink\BladeShapeDivider\ShapeDivider;

class BladeShapeDividerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register the template directory
        $viewPath = realpath(__DIR__.'/../resources');
        $this->app['view']->addNamespace('shape-divider', $viewPath);

        // Register x-shape-divider component
        Blade::component('shape-divider', ShapeDivider::class);
    }
}
