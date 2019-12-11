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
        // Resources
        $this->loadTranslationsFrom($this->getTranslationsDirectory(), 'baconfy');
        $this->loadViewsFrom($this->getViewsDirectory(), 'baconfy');

        // Configs
        $this->mergeConfigFrom($this->getConfigDirectory(), 'baconfy');
    }
}