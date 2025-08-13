<?php

namespace App\Filament\Resources\Items\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('parent.name')
                    ->sortable(),
                TextColumn::make('barcode')
                    ->searchable(),
                TextColumn::make('baseUom.name')
                    ->sortable(),
                TextColumn::make('op_stock_qty')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('taxCategory.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('hsn_sac')
                    ->searchable(),
                TextColumn::make('sale_price')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('purchase_price')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('max_retail_price')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
