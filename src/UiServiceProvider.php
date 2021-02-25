<?php

namespace Baconfy\Ui;

use Baconfy\Traits\Loaders\ViewComponentsTrait;
use Baconfy\Ui\Components\AppLayout;
use Baconfy\Ui\Components\EmptyLayout;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Baconfy\Traits\ReflectionTrait;

class UiServiceProvider extends LaravelServiceProvider
{
    use ReflectionTrait, ViewComponentsTrait;

    /**
     * Boot Module
     */
    public function boot()
    {
        $this->configureAssets();
        $this->configureConfig();
        $this->configureTranslations();
        $this->configureViews();
        $this->configureMails();
    }

    /**
     * Boot assets
     */
    private function configureAssets()
    {
        $this->publishes([__DIR__ . '/../dist' => public_path('baconfy/ui')], 'public');
    }

    /**
     * Boot configuration
     */
    private function configureConfig()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ui.php', 'ui');
    }

    /**
     * Boot views
     */
    private function configureViews()
    {
        // Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');

        // View Components
        $this->loadModuleViewComponentsFromDirectory(__DIR__ . '/../resources/views/components');
        $this->loadModuleViewComponents('Components');
    }

    /**
     * Boot languages
     */
    private function configureTranslations()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'ui');
    }

    /**
     * Configure mails
     */
    private function configureMails()
    {
        Config::set('mail.markdown.theme', 'default');
        Config::set('mail.markdown.paths', [
            __DIR__ . '/../resources/views/mail'
        ]);
    }
}