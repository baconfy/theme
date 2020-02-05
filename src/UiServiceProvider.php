<?php

namespace Baconfy\Ui;

use Baconfy\Ui\Traits\Loaders;
use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
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

        // Assets
        $this->makeAssetsPublic();
    }

    /**
     * Create symlink to assets
     */
    private function makeAssetsPublic()
    {
        if (!$this->app->make('files')->exists(public_path('baconfy'))) {
            $this->app->make('files')->link(
                realpath(__DIR__ . '/../dist'), public_path('baconfy')
            );
        }
    }
}