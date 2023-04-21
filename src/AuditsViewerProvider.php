<?php

namespace Sunshift\Audits;

use Illuminate\Support\ServiceProvider;

class AuditsViewerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Sunshift\Audits\Controllers\AuditController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'audits');
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/audits'),
        ]);
    }
}