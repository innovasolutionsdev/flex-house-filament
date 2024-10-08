<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\WorkoutLogResource\Pages;
use App\Filament\User\Resources\WorkoutLogResource\RelationManagers;
use App\Models\WorkoutLog;
use App\Models\Workout;
use App\Models\Exercise;
use App\Models\ScheduleAssignment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
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
            Select::make('workout_id')
            ->label('Select Workout')
            ->options(function () {
                // Get the logged-in user's active schedule
                // $user = auth()->user();
                // $workouts = Workout::whereHas('scheduleAssignments', function ($query) use ($user) {
                //     $query->where('user_id', $user->id)
                //         ->where('status', 'active');
                // })->pluck('name', 'id');
                // Get active workouts from the user's active schedule assignments
                $user = auth()->user();

                $scheduleAssignments = ScheduleAssignment::where('user_id', $user->id)
                    ->where('status', 'active')
                    ->with('schedule.workouts') // Eager load the workouts of the schedule
                    ->get();

                $workouts = collect();

                // Loop through schedule assignments to get workouts
                foreach ($scheduleAssignments as $assignment) {
                    $workouts = $workouts->merge($assignment->schedule->workouts);
                }

                $workoutNames = $workouts->pluck('name');


                return $workouts;
            })
                ->required(),

            DatePicker::make('date')
                ->label('Workout Date')
                ->required(),

            // Dynamic repeater for logging exercises
            Repeater::make('exercise_logs')
            ->relationship('exerciseLogs')
            ->schema([
                Select::make('exercise_id')
                ->label('Exercise')
                ->options(Exercise::all()->pluck('name', 'id'))
                ->required(),
                TextInput::make('sets')->numeric()->label('Sets')->required(),
                TextInput::make('reps')->numeric()->label('Reps')->required(),
                TextInput::make('weight')->numeric()->label('Weight (kg)')->required(),
            ])
                ->columns(3)
                ->label('Log Exercises')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('workout.name')->label('Workout'),
                TextColumn::make('date')->date()->label('Date'),
                TextColumn::make('exercise_logs_count')->counts('exerciseLogs')->label('Exercises Logged'),
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
