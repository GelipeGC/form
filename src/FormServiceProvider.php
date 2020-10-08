<?php
namespace Fguzman;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views/', 'fguzman-form');

        Blade::component('Fguzman\Form', 'form');
    }
    
}
