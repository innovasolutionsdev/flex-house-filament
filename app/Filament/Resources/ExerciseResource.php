<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExerciseResource\Pages;
use App\Filament\Resources\ExerciseResource\RelationManagers;
use App\Models\Exercise;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\BelongsToSelect;

class ExerciseResource extends Resource
{
    protected static ?string $model = Exercise::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Schedule Management';


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // 'name' field: required and max length of 255 characters
            TextInput::make('name')
            ->required()
                ->maxLength(255)
                ->label('Name'),

            // 'workout_id' field: required, belongs to a valid 'workout' relation
            BelongsToSelect::make('workout_id')
            ->relationship('workout', 'name') // Link to workout
            ->required()
                ->label('Workout'),

            // 'sets' field: required and should be a valid integer
            TextInput::make('sets')
            ->required()
                ->numeric() // Validates that the input is a number
                ->label('Sets'),

            // 'reps' field: required and should be a valid integer
            TextInput::make('reps')
            ->required()
                ->maxLength(255) // Validates that the input is a number
                ->label('Reps'),

            // 'rest_time' field: required and should be a valid integer
            TextInput::make('rest_time')
            ->required()
                ->numeric() // Validates that the input is a number
                ->label('Rest Time (in seconds)'),

            // 'note' field: optional, can be a string with a max length
            TextInput::make('note')
            ->nullable() // Make it optional
                ->maxLength(255) // Limit the note length to 255 characters
                ->label('Note (optional)'),
        ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('workout.name'), // Display the workout name
                Tables\Columns\TextColumn::make('sets'),
                Tables\Columns\TextColumn::make('reps'),
                Tables\Columns\TextColumn::make('rest_time'),
            ])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExercises::route('/'),
            'create' => Pages\CreateExercise::route('/create'),
            'edit' => Pages\EditExercise::route('/{record}/edit'),
        ];
    }
}
