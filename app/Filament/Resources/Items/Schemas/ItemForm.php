<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('group_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('barcode'),
                TextInput::make('uom_id')
                    ->required()
                    ->numeric(),
                Toggle::make('has_multi_uom')
                    ->required(),
                Toggle::make('is_physical')
                    ->required(),
                TextInput::make('op_stock_qty')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('op_stock_amount')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Select::make('tax_category_id')
                    ->relationship('taxCategory', 'name')
                    ->required(),
                TextInput::make('hsn_sac'),
                TextInput::make('sale_price')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('purchase_price')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('max_retail_price')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('min_sale_price')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('self_val_price')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                Textarea::make('description1')
                    ->columnSpanFull(),
                Textarea::make('description2')
                    ->columnSpanFull(),
                Textarea::make('description3')
                    ->columnSpanFull(),
                Textarea::make('description4')
                    ->columnSpanFull(),
                Textarea::make('description5')
                    ->columnSpanFull(),
                TextInput::make('min_level_qty')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('reorder_level_qty')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('max_level_qty')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('user')
                    ->required()
                    ->numeric()
                    ->default(1),
            ]);
    }
}
