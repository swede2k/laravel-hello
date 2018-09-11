<?php

namespace swede2k\Hello;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton(Hello::class, function () {
            return new Hello;
        });
        $this->app->alias(Hello::class, 'hello');
    }
}