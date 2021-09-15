<?php

namespace Mawuekom\LangResources;

use Illuminate\Support\ServiceProvider;

class LangResourcesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'lang-resources');

        if ($this->app->runningInConsole()) {

            // Publishing the translation files.
            $this->publishes([
                __DIR__.'/../resources/lang/en' => resource_path('lang/en/lang-resources'),
                __DIR__.'/../resources/lang/fr' => resource_path('lang/fr/lang-resources'),
            ], 'lang');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // 
    }
}
