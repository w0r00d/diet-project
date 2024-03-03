<?php

namespace App\Filament\Resources\PatientResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrimaryMeasurementsRelationManager extends RelationManager
{
    protected static string $relationship = 'primary_measurements';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('measure_date')
                ->required()
                ->default(now())
                ->displayFormat('d/m/Y'),
                Forms\Components\TextInput::make('weight')
                    ->required()
                    ->numeric(),
                    Forms\Components\TextInput::make('height')
                    ->required()
                      ->numeric(),
                    Forms\Components\TextInput::make('notes')
                    ,

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('weight')
            ->columns([
                Tables\Columns\TextColumn::make('measure_date')
                ->sortable(),
                Tables\Columns\TextColumn::make('weight'),
                Tables\Columns\TextColumn::make('height'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
