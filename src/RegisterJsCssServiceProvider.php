<?php
namespace Djmitry\RegisterJsCss;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class RegisterJsCssServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('assets', function($expression) {
            return RegisterJsCssHelper::show();
        });
    }
}