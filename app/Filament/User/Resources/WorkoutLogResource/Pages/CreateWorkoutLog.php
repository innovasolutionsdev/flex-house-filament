<?php

namespace App\Filament\User\Resources\WorkoutLogResource\Pages;

use App\Filament\User\Resources\WorkoutLogResource;
use App\Models\Exercise_Volume;
use App\Models\WorkoutLog;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Http\Request;

class CreateWorkoutLog extends CreateRecord
{
    protected static string $resource = WorkoutLogResource::class;


    public function afterCreate(Request $request): void
    {
        // Validate and create the workout log
        $workoutLog = WorkoutLog::create($request->validated());

        // Loop through workoutLogDetails to calculate and store volume
        foreach ($request->input('workoutLogDetails') as $detail) {
            $sets = $detail['sets']; // Get the sets for the exercise
            $exerciseId = $detail['exercise_id'];

            $totalVolume = 0;

            // Calculate total volume for this exercise
            foreach ($sets as $set) {
                $totalVolume += $set['reps'] * $set['weight'];
            }

            // Store the calculated volume in the exercise_volumes table
            Exercise_Volume::create([
                'exercise_id' => $exerciseId,
                'volume' => $totalVolume,
            ]);
        }


    }
}
