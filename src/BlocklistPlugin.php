<?php

namespace VEximweb\Core\Blocklist;

use Filament\Contracts\Plugin;
use Filament\Panel;
use VEximweb\Core\Blocklist\Filament\Resources\BlocklistResource;

class BlocklistPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());
        return $plugin;
    }    
    
    public function getId(): string
    {
        return 'blocklist';
    }

    public function register(Panel $panel): void
    {
        // Register the Group resource
        $panel->resources([
            BlocklistResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
        // Any boot logic
    }
}
