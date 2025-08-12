<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PatientInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('group_id')
                    ->numeric(),
                TextEntry::make('name'),
                TextEntry::make('address'),
                TextEntry::make('mobile'),
                TextEntry::make('email')
                    ->label('Email address'),
                IconEntry::make('is_registered')
                    ->boolean(),
                TextEntry::make('state.name')
                    ->numeric(),
                TextEntry::make('gstin'),
                TextEntry::make('pan'),
                IconEntry::make('is_additive')
                    ->boolean(),
                TextEntry::make('op_balance')
                    ->numeric(),
                TextEntry::make('cr_dr'),
                IconEntry::make('is_editable')
                    ->boolean(),
                IconEntry::make('is_deletable')
                    ->boolean(),
                TextEntry::make('op_number'),
                TextEntry::make('gender'),
                TextEntry::make('date_of_birth')
                    ->date(),
                TextEntry::make('occupation'),
                TextEntry::make('referred_by'),
                TextEntry::make('address_proof_id'),
                TextEntry::make('address_proof_number'),
                IconEntry::make('is_updated')
                    ->boolean(),
                IconEntry::make('admission_status')
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
