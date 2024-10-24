<?php

namespace App\Filament\User\Widgets;

use App\Models\WorkoutLog;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;

class WeeklyExerciseProgressWidget extends Widget
{
    protected static string $view = 'filament.user.widgets.weekly-exercise-progress-widget';

    public function getWeeklyExerciseProgress()
    {
        $user = Auth::user();

        // Get the start date of the current week
        $startOfWeek = now()->startOfWeek();
        $endOfWeek = now()->endOfWeek();

        // Fetch workout logs for the logged-in user within the current week
        $workoutLogs = WorkoutLog::where('user_id', $user->id)
            ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
            ->with('workoutLogDetails.sets')
            ->get();

        $exerciseProgress = [];

        foreach ($workoutLogs as $workoutLog) {
            foreach ($workoutLog->workoutLogDetails as $detail) {
                $exerciseName = $detail->exercise->name;

                // Get all the sets for the current workout log detail
                $sets = \App\Models\ExerciseSet::where('workout_log_detail_id', $detail->id)->get();



                foreach ($sets as $set) {
                    // Calculate the workout amount for each set
                    $amount = $set->reps * $set->weight;

                    // Store the amount by day for each exercise
                    $day = $workoutLog->created_at->format('Y-m-d');
                    if (!isset($exerciseProgress[$exerciseName][$day])) {
                        $exerciseProgress[$exerciseName][$day] = 0;
                    }
                    $exerciseProgress[$exerciseName][$day] += $amount;
                }

            }
        }

        return $exerciseProgress;
    }

    public function render(): View
    {
        return view('filament.user.widgets.weekly-exercise-progress-widget', [
            'exerciseProgress' => $this->getWeeklyExerciseProgress(),
        ]);
    }
}
