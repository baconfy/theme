<?php

namespace Baconfy\Theme;

use Baconfy\Theme\Traits\Loaders;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    use Loaders;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom($this->getViewsDirectory(), 'baconfy');
        $this->mergeConfigFrom($this->getConfigDirectory(), 'baconfy');
    }
}