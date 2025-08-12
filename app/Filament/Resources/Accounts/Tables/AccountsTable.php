<?php

namespace App\Filament\Resources\Accounts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AccountsTable
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
                TextColumn::make('address')
                    ->searchable(),
                TextColumn::make('mobile')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                IconColumn::make('is_registered')
                    ->boolean(),
                TextColumn::make('state.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('gstin')
                    ->searchable(),
                TextColumn::make('pan')
                    ->searchable(),
                IconColumn::make('is_additive')
                    ->boolean(),
                TextColumn::make('op_balance')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('cr_dr')
                    ->searchable(),
                IconColumn::make('is_editable')
                    ->boolean(),
                IconColumn::make('is_deletable')
                    ->boolean(),
                TextColumn::make('op_number')
                    ->searchable(),
                TextColumn::make('gender')
                    ->searchable(),
                TextColumn::make('date_of_birth')
                    ->date()
                    ->sortable(),
                TextColumn::make('occupation')
                    ->searchable(),
                TextColumn::make('referred_by')
                    ->searchable(),
                TextColumn::make('address_proof_id')
                    ->searchable(),
                TextColumn::make('address_proof_number')
                    ->searchable(),
                IconColumn::make('is_updated')
                    ->boolean(),
                IconColumn::make('admission_status')
                    ->boolean(),
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
