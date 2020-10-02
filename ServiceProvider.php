<?php

namespace Baconfy\Ui;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Baconfy\Traits\ReflectionTrait;

class ServiceProvider extends LaravelServiceProvider
{
    use ReflectionTrait;

    /**
     * Boot Module
     * 
     * @return void
     */
    public function boot()
    {
        $this->bootAssets();
        $this->bootConfig();
        $this->bootTranslations();
        $this->bootViews();
    }

    /**
     * Boot assets
     */
    private function bootAssets()
    {
        $this->publishes([$this->getClassDirectory('dist') => public_path('baconfy/ui')], 'public');
    }

    /**
     * Boot configuration
     */
    private function bootConfig()
    {
        $this->mergeConfigFrom($this->getClassDirectory('config/ui.php'), 'ui');
    }

    /**
     * Boot views
     */
    private function bootViews()
    {
        $this->loadViewsFrom($this->getClassDirectory('resources/views'), 'ui');
    }

    /**
     * Boot languages
     */
    private function bootTranslations()
    {
        $this->loadTranslationsFrom($this->getClassDirectory('resources/languages'), 'ui');
    }
}
