<?php

namespace PimpleAwareController;
use Silex\Application;
use Silex\ServiceProviderInterface;

class ServiceProvider implements ServiceproviderInterface {

    public function register (Application $app)
    {
        $app['resolver'] = $app->share($app->extend('resolver', function ($resolver, $app) {
            return new Resolver($app);
        }));
    }

    public function boot (Application $app)
    {
    }

}
