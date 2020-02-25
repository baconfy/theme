<?php

namespace Baconfy\Ui;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Baconfy\Support\Traits\ReflectionTrait;

class ServiceProvider extends LaravelServiceProvider
{
    use ReflectionTrait;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootAssets();
        $this->bootConfig();
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
        $this->mergeConfigFrom($this->getClassDirectory('ui.php'), 'ui');
    }

    /**
     * Boot views
     */
    private function bootViews()
    {
        $this->loadViewsFrom($this->getClassDirectory('views'), 'ui');
    }
}
