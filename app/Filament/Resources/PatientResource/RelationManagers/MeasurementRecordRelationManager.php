<?php

namespace App\Filament\Resources\PatientResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\measurement;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
class MeasurementRecordRelationManager extends RelationManager
{
    protected static string $relationship = 'measurement_record';

    public function form(Form $form): Form
    {
        return $form ->schema([
  //  Repeater::make('measurement_record')
         // ->schema([

                Forms\Components\TextInput::make('val')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('measurement_id')
                    ->required()
               //     ->native(false)
                  ->options(Measurement::all()->pluck('mesurement_desc','id'))
                //    ->searchable()
            ])
         // ])
               ->columns(2)
          ;
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('val')
            ->columns([
                Tables\Columns\TextColumn::make('val')
               ,
               Tables\Columns\TextColumn::make('measurement.mesurement_desc'),
               Tables\Columns\TextColumn::make('created_at')
               ->sortable(),
              
            ])
            ->filters([
                SelectFilter::make('measurement')
                ->relationship('measurement', 'mesurement_desc')
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
