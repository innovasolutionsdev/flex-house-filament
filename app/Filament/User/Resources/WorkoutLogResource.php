<?php

namespace App\Filament\User\Resources;

use Filament\Infolists\Infolist;

use App\Filament\User\Resources\WorkoutLogResource\Pages;
use App\Filament\User\Resources\WorkoutLogResource\RelationManagers;
use App\Models\WorkoutLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\ScheduleAssignment;
use Illuminate\Support\Facades\Auth;
use Filament\Infolists\Components\Text;

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

                return $workouts->pluck('name',
                    'id'
                );  // Return workouts as id => name pairs
            })
            ->required()
            ->reactive(),

                // HasManyRepeater for Exercise and its sets
                Forms\Components\HasManyRepeater::make('workoutLogDetails')
                ->relationship('workoutLogDetails')
                ->createItemButtonLabel('Add New Exercise')
                ->schema([

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



                    // A repeater for sets associated with this exercise
                    Forms\Components\HasManyRepeater::make('sets')
                    ->relationship('sets')
                    ->schema([
                        // Grouping the inputs in a single row
                        Forms\Components\Group::make([
                            Forms\Components\TextInput::make('set_number')
                            ->label('Set Number')
                            ->required()
                                ->numeric()
                                ->default(function (?Model $record) {
                                    // If the record exists, get the current count of sets for this exercise
                                    if ($record) {
                                        $existingSetsCount = $record->workoutLogDetails()
                                            ->where('exercise_id', $record->exercise_id)
                                            ->first()
                                            ?->sets()
                                            ->count() ?? 0;

                                        return $existingSetsCount + 1; // Return the next set number
                                    }

                                    return 1; // Default to 1 if no existing record
                                }),

                            Forms\Components\TextInput::make('reps')
                            ->label('Reps')
                            ->numeric()
                                ->required(),

                            Forms\Components\TextInput::make('weight')
                            ->label('Weight (kg)')
                            ->numeric()
                                ->required(),
                        ])
                            ->columns(3) // Adjust the number of columns as needed
                            ->label('Sets')
                    ])
                        ->createItemButtonLabel('Add New Set')  // Label for adding new sets
                        ->minItems(1)  // Ensure at least one set is entered
                        ->required(),
                ])
                    ->required(),
            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            // ->query(fn(Builder $query) => $query->where('user_id', auth()->id())) // Filter by logged-in user
            ->columns([
                Tables\Columns\TextColumn::make('workout.name')->label('Workout'),
                Tables\Columns\TextColumn::make('created_at')->label('Date')->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                
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
            // 'view' => Pages\ViewWorkoutLog::route('/{record}'), // Add this line
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', Auth::id());
    }
}
