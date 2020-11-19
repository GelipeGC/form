<?php
namespace Fguzman;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/form.php', 'form');
        
        $this->loadViewsFrom(__DIR__.'/../resources/views/', 'fguzman-form');

        //$this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'form');
        $this->loadJsonTranslationsFrom(__DIR__.'/../resources/lang');
        Blade::component('Fguzman\Form', 'form');
        Blade::component('Fguzman\Field', 'field');
    }
}
