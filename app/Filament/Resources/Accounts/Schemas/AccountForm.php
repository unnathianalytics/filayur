<?php

namespace App\Filament\Resources\Accounts\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AccountForm
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
                TextInput::make('address'),
                TextInput::make('mobile'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                Toggle::make('is_registered')
                    ->required(),
                Select::make('state_id')
                    ->relationship('state', 'name')
                    ->required(),
                TextInput::make('gstin'),
                TextInput::make('pan'),
                Toggle::make('is_additive')
                    ->required(),
                TextInput::make('op_balance')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('cr_dr')
                    ->required()
                    ->default('dr'),
                Toggle::make('is_editable')
                    ->required(),
                Toggle::make('is_deletable')
                    ->required(),
                TextInput::make('op_number'),
                TextInput::make('gender'),
                DatePicker::make('date_of_birth'),
                TextInput::make('occupation'),
                TextInput::make('referred_by'),
                TextInput::make('address_proof_id'),
                TextInput::make('address_proof_number'),
                Toggle::make('is_updated')
                    ->required(),
                Toggle::make('admission_status')
                    ->required(),
                Textarea::make('image')
                    ->columnSpanFull(),
                TextInput::make('user')
                    ->required()
                    ->numeric()
                    ->default(1),
            ]);
    }
}
