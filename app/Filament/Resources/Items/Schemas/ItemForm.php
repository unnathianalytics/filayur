<?php

namespace App\Filament\Resources\Items\Schemas;

use App\Models\Uom;
use App\Models\ItemGroup;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make()
                    ->schema([
                        Select::make('group_id')
                            ->options(ItemGroup::all()->pluck('name', 'id'))
                            ->required(),
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('barcode'),
                    ])
                    ->columns(3)
                    ->columnSpanFull(),
                Grid::make()
                    ->schema([
                        Select::make('uom_id')
                            ->options(Uom::all()->pluck('name', 'id'))
                            ->required(),

                        Toggle::make('has_multi_uom')
                            ->required(),
                        Toggle::make('is_physical')
                            ->required(),
                    ])
                    ->columns(3),
                Grid::make()
                    ->schema([
                        TextInput::make('op_stock_qty')
                            ->required()
                            ->numeric()
                            ->default(0.0),
                        TextInput::make('op_stock_amount')
                            ->required()
                            ->numeric()
                            ->default(0.0),
                    ]),
                Grid::make()
                    ->schema([
                        Select::make('tax_category_id')
                            ->relationship('taxCategory', 'name')
                            ->required(),
                        TextInput::make('hsn_sac'),
                    ]),
                Grid::make()
                    ->schema([
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
                    ]),
                Grid::make()
                    ->schema([
                        TextInput::make('description1'),
                        TextInput::make('description2'),
                        TextInput::make('description3'),
                        TextInput::make('description4'),
                    ]),
                Grid::make()
                    ->schema([
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
                    ]),
            ]);
    }
}
