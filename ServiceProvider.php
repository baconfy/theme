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
        $this->mergeConfigFrom($this->getClassDirectory('config/ui.php'), 'ui');
        $this->loadViewsFrom($this->getClassDirectory('views'), 'ui');
    }
}
