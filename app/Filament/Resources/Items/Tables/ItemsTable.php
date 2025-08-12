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
                TextColumn::make('group_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('barcode')
                    ->searchable(),
                TextColumn::make('uom_id')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('has_multi_uom')
                    ->boolean(),
                IconColumn::make('is_physical')
                    ->boolean(),
                TextColumn::make('op_stock_qty')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('op_stock_amount')
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
                TextColumn::make('min_sale_price')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('self_val_price')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('min_level_qty')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('reorder_level_qty')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('max_level_qty')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('user')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
