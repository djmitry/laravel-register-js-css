<?php
namespace Djmitry\RegisterJsCss;

use Illuminate\Support\ServiceProvider;

class ServiceProviderRegisterJsCss
{
    public function boot()
    {
        Blade::directive('assets', function($expression) {
            return 1;
        });
    }
}