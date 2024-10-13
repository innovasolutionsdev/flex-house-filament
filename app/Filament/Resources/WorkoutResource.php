<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkoutResource\Pages;
use App\Filament\Resources\WorkoutResource\RelationManagers;
use App\Models\Workout;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\HasManyRepeater;
use Filament\Forms\Components\BelongsToSelect;


class WorkoutResource extends Resource
{
    protected static ?string $model = Workout::class;

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

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

            // 'schedule_id' field: required, belongs to a valid 'schedule' relation
            BelongsToSelect::make('schedule_id')
            ->relationship('schedule', 'name')  // Link to schedule
            ->required()
                ->label('Schedule'),

            // 'exercises' field: HasManyRepeater with validation for each exercise
            HasManyRepeater::make('exercises')
            ->relationship('exercises')
            ->createItemButtonLabel('Add New Exercise')
            ->schema([
                // 'name' field: required and max length of 255 characters
                TextInput::make('name')
                ->required()
                    ->maxLength(255)
                    ->label('Exercise Name'),

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
                    ->label('Note'),
            ]),
        ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('schedule.name')
                    ->numeric(),
                    // ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
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
            'index' => Pages\ListWorkouts::route('/'),
            'create' => Pages\CreateWorkout::route('/create'),
            'edit' => Pages\EditWorkout::route('/{record}/edit'),
        ];
    }
}
