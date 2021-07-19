<?php

namespace SoluzioneSoftware\LaravelPWA;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/pwa.php', 'pwa'
        );
    }

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'pwa');

        $this->bootPublishes();
    }

    private function bootPublishes()
    {
        $this
            ->publishes(
                [
                    __DIR__.'/../resources/views' => App::resourcePath('views/vendor/pwa'),
                ],
                ['pwa', 'views', 'pwa-views']
            );

        /** @noinspection PhpUndefinedFunctionInspection */
        $this
            ->publishes(
                [
                    __DIR__.'/../resources/js/index.js' => public_path('vendor/pwa/js/index.js'),
                    __DIR__.'/../resources/images' => public_path('vendor/pwa/images'),
                    __DIR__.'/../resources/js/service-worker.js' => public_path('/service-worker.js'),
                    __DIR__.'/../resources/app.webmanifest' => public_path('/app.webmanifest'),
                ],
                ['pwa', 'public', 'pwa-public']
            );

        $this->publishes(
            [
                __DIR__.'/../config/pwa.php' => App::configPath('pwa.php'),
            ],
            ['pwa', 'config', 'pwa-config']
        );
    }
}
