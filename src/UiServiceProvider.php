<?php

namespace Baconfy\Ui;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Baconfy\Traits\ReflectionTrait;
use ReflectionException;

class UiServiceProvider extends LaravelServiceProvider
{
    use ReflectionTrait;

    /**
     * Boot Module
     *
     * @return void
     * @throws ReflectionException
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
     * @throws ReflectionException
     */
    private function bootAssets()
    {
        $this->publishes([$this->getClassDirectory('../dist') => public_path('baconfy/ui')], 'public');
    }

    /**
     * Boot configuration
     * @throws ReflectionException
     */
    private function bootConfig()
    {
        $this->mergeConfigFrom($this->getClassDirectory('../config/ui.php'), 'ui');
    }

    /**
     * Boot views
     * @throws ReflectionException
     */
    private function bootViews()
    {
        $this->loadViewsFrom($this->getClassDirectory('../resources/views'), 'ui');
    }

    /**
     * Boot languages
     * @throws ReflectionException
     */
    private function bootTranslations()
    {
        $this->loadTranslationsFrom($this->getClassDirectory('../resources/languages'), 'ui');
    }
}