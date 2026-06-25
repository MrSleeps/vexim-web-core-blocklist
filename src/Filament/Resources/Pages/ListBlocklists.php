<?php

namespace VEximweb\Core\Blocklist\Filament\Resources\Pages;

use VEximweb\Core\Blocklist\Filament\Resources\BlocklistResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBlocklists extends ListRecords
{
    protected static string $resource = BlocklistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
