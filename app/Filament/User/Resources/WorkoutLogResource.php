<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\WorkoutLogResource\Pages;
use App\Filament\User\Resources\WorkoutLogResource\RelationManagers;
use App\Models\WorkoutLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WorkoutLogResource extends Resource
{
    protected static ?string $model = WorkoutLog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Hidden input field for user id passing
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->id()),

                Forms\Components\Select::make('workout_id')
                ->label('Workout')
                ->relationship('workout', 'name')
                    ->options(function () {
                        return auth()->user()->scheduleAssignments()
                            ->where('status', 'active')
                            ->first()
                            ->schedule
                            ->workouts()
                            ->pluck('name', 'id');
                    })
                    ->required(),

                Forms\Components\HasManyRepeater::make('workoutLogDetails')
                ->relationship('workoutLogDetails')
                ->schema([
                    Forms\Components\Select::make('exercise_id')
                    ->label('Exercise')
                    ->relationship('exercise', 'name')
                        ->required(),
                    Forms\Components\TextInput::make('set_number')->label('Set Number')->required(),
                    Forms\Components\TextInput::make('reps')->required(),
                    Forms\Components\TextInput::make('weight')->required(),
                ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('workout.name')->label('Workout'),
            Tables\Columns\TextColumn::make('created_at')->label('Logged At')->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListWorkoutLogs::route('/'),
            'create' => Pages\CreateWorkoutLog::route('/create'),
            'edit' => Pages\EditWorkoutLog::route('/{record}/edit'),
        ];
    }
}
