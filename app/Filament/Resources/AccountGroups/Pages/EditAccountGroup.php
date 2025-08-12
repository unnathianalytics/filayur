<?php

namespace App\Filament\Resources\AccountGroups\Pages;

use App\Filament\Resources\AccountGroups\AccountGroupResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAccountGroup extends EditRecord
{
    protected static string $resource = AccountGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
