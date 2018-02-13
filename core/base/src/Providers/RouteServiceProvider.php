<?php

namespace Botble\Base\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    /**
     * @var Application
     */
    protected $app;

    /**
     * Move base routes to a service provider to make sure all filters & actions can hook to base routes
     * @author Sang Nguyen
     */
    public function boot()
    {
        $this->app->booted(function () {
            $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        });
    }
}
