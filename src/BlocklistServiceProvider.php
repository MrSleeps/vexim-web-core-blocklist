<?php
namespace VEximweb\Core\Blocklist;

use Filament\Panel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class BlocklistServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/blocklist.php',
            'blocklist'
        );

        Panel::configureUsing(function (Panel $panel) {
            $panel->plugin(BlocklistPlugin::make());
        });
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        //$this->loadViewsFrom(__DIR__ . '/../resources/views', 'blocklist');

        $this->publishes([
            __DIR__ . '/../config/blocklist.php' => config_path('blocklist.php'),
        ], 'blocklist-config');

        if ($this->app->runningInConsole()) {
            $this->commands([
            ]);
        }
    }
}