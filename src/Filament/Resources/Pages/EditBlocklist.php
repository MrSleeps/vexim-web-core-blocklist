<?php

namespace VEximweb\Core\Blocklist\Filament\Resources\Pages;

use VEximweb\Core\Blocklist\Filament\Resources\BlocklistResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBlocklist extends EditRecord
{
    protected static string $resource = BlocklistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
