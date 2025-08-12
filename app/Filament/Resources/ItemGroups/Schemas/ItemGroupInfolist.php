<?php

namespace App\Filament\Resources\ItemGroups\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ItemGroupInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('primary_id')
                    ->numeric(),
                IconEntry::make('is_editable')
                    ->boolean(),
                IconEntry::make('is_deletable')
                    ->boolean(),
                TextEntry::make('user')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
