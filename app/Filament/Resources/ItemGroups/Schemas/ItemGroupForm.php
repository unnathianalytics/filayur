<?php

namespace App\Filament\Resources\ItemGroups\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ItemGroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('primary_id')
                    ->numeric(),
                Toggle::make('is_editable')
                    ->required(),
                Toggle::make('is_deletable')
                    ->required(),
                TextInput::make('user')
                    ->required()
                    ->numeric()
                    ->default(1),
            ]);
    }
}
