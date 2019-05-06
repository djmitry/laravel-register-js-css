<?php
namespace Djmitry\RegisterJsCss;

use Illuminate\Support\ServiceProvider;

class RegisterJsCssServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('assets', function($expression) {
            return RegisterJsCssHelper::show();
        });
    }
}