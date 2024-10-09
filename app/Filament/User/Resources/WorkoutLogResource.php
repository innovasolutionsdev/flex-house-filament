<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\WorkoutLogResource\Pages;
use App\Filament\User\Resources\WorkoutLogResource\RelationManagers;
use App\Models\WorkoutLog;
use App\Models\Workout;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\HasManyRepeater;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ActionsColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkoutLogResource extends Resource
{
    protected static ?string $model = WorkoutLog::class;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', auth()->id());
    }

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('workout_id')
                ->relationship('workout', 'name')
                    ->label('Workout')
                // ->options(
                //     Workout::whereHas('scheduleAssignments', function ($query) {
                //         $query->where('status', 'active')
                //             ->where('user_id', auth()->id());
                //     })->pluck('name', 'id')
                // )
                // ->options(
                //     Workout::whereHas('scheduleAssignments', function ($query) {
                //         $query->where('status', 'active')
                //         ->where('user_id', auth()->id());
                //     })->pluck('name', 'id')
                // )
                //     ->required(),
                ->options(
                    Workout::whereHas('scheduleAssignments', function ($query) {
                        $query->where('status', 'active')
                        ->where('user_id', auth()->id());
                    })->pluck('name', 'id')
                ),


                HasManyRepeater::make('exercises')
                ->relationship('exercises')
                ->schema([
                    Select::make('exercise_id')
                    ->relationship('exercise', 'name')
                        ->label('Exercise')
                        ->required(),
                    HasManyRepeater::make('sets')
                        ->relationship('sets')
                        ->schema([
                            TextInput::make('reps')
                                ->numeric()
                                ->label('Reps')
                                ->required(),
                            TextInput::make('weight')
                                ->numeric()
                                ->label('Weight')
                                ->required(),
                        ])
                ])
                    ->label('Exercises')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('workout.name')->label('Workout'),
                TextColumn::make('created_at')->label('Logged At'),
                TextColumn::make('actions')->label('Actions'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListWorkoutLogs::route('/'),
            'create' => Pages\CreateWorkoutLog::route('/create'),
            'edit' => Pages\EditWorkoutLog::route('/{record}/edit'),
        ];
    }
}
