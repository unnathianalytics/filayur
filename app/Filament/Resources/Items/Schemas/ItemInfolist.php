<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ItemInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('group_id')
                    ->numeric(),
                TextEntry::make('name'),
                TextEntry::make('barcode'),
                TextEntry::make('uom_id')
                    ->numeric(),
                IconEntry::make('has_multi_uom')
                    ->boolean(),
                IconEntry::make('is_physical')
                    ->boolean(),
                TextEntry::make('op_stock_qty')
                    ->numeric(),
                TextEntry::make('op_stock_amount')
                    ->numeric(),
                TextEntry::make('taxCategory.name')
                    ->numeric(),
                TextEntry::make('hsn_sac'),
                TextEntry::make('sale_price')
                    ->numeric(),
                TextEntry::make('purchase_price')
                    ->numeric(),
                TextEntry::make('max_retail_price')
                    ->numeric(),
                TextEntry::make('min_sale_price')
                    ->numeric(),
                TextEntry::make('self_val_price')
                    ->numeric(),
                TextEntry::make('min_level_qty')
                    ->numeric(),
                TextEntry::make('reorder_level_qty')
                    ->numeric(),
                TextEntry::make('max_level_qty')
                    ->numeric(),
                TextEntry::make('user')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
