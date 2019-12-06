<?php

namespace Baconfy\Theme;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom($this->getViewsDirectory(), 'baconfy');
    }

    /**
     * @return false|string
     */
    private function getViewsDirectory()
    {
        return realpath(__DIR__ . '/../resources/views');
    }
}