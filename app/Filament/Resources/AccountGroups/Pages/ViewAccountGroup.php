<?php

namespace App\Filament\Resources\AccountGroups\Pages;

use App\Filament\Resources\AccountGroups\AccountGroupResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAccountGroup extends ViewRecord
{
    protected static string $resource = AccountGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
