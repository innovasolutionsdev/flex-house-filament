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
                // Select Workout
                //hidden input field to store user id
                Forms\Components\Hidden::make('user_id')
                ->default(fn () => auth()->id()),

                // Select Workout dropdown
                Select::make('workout_id')
                ->label('Select Workout')
                ->options(function () {
                    $user = auth()->user();

                    // Get all active schedule assignments for the logged-in user
                    $scheduleAssignments = ScheduleAssignment::where('user_id', $user->id)
                        ->where('status', 'active')
                        ->with('schedule.workouts') // Eager load the workouts for the schedules
                        ->get();

                    $workouts = collect();

                    // Loop through schedule assignments to gather the associated workouts
                    foreach ($scheduleAssignments as $assignment) {
                        $workouts = $workouts->merge($assignment->schedule->workouts);
                    }

                    return $workouts->pluck('name', 'id');  // Return workouts as id => name pairs
                })
                    ->required()
                    ->reactive(),

                // Date Picker for workout logging date
                DatePicker::make('date')
                ->label('Workout Date')
                ->default(now())
                    ->required(),

                // Repeater for logging exercises dynamically based on active schedule
                Repeater::make('exercise_logs')
                ->label('Log Exercises')
                ->relationship('exerciseLogs')
                ->schema([
                    // Select Exercise dropdown: exercises related to all workouts in the active schedule
                    Select::make('exercise_id')
                    ->label('Exercise')
                    ->options(function () {
                        $user = auth()->user();

                        // Get all active schedule assignments for the logged-in user
                        $scheduleAssignments = ScheduleAssignment::where('user_id', $user->id)
                            ->where('status', 'active')
                            ->with('schedule.workouts.exercises') // Eager load exercises for the workouts
                            ->get();

                        $exercises = collect();

                        // Loop through the schedule assignments and collect all exercises
                        foreach ($scheduleAssignments as $assignment) {
                            foreach ($assignment->schedule->workouts as $workout) {
                                $exercises = $exercises->merge($workout->exercises);
                            }
                        }

                        // Return exercises as id => name pairs
                        return $exercises->pluck('name', 'id');
                    })
                        ->required(),

                    // Repeater for Sets
                    Repeater::make('sets')
                    ->label('Sets')
                    ->schema([
                        // Input fields for each set
                        TextInput::make('reps')
                        ->numeric()
                            ->label('Reps')
                            ->required(),
                        TextInput::make('weight')
                        ->numeric()
                            ->label('Weight (kg)')
                            ->required(),
                    ])
                        ->columns(2)
                        ->createItemButtonLabel('Add New Set') // Button label to add a new set
                        ->defaultItems(0) // Start with no sets by default
                ])
                    ->columns(1) // Organize the input fields into a single column for clarity
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
