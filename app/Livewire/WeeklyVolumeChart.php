<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ExerciseLog;
use Carbon\Carbon;
use App\Models\SetLog;

class WeeklyVolumeChart extends Component
{

    public $selectedExercise;
    public $exercises = [];
    public $volumeData = [];

    public function mount()
    {
        // Fetch exercises for the dropdown
        $this->exercises = ExerciseLog::whereHas('workoutLog', function ($query) {
            $query->where('user_id', Auth::id());
        })->pluck('exercise_name', 'id');
        // $this->exercises = ExerciseLog::distinct()->pluck('exercise_name', 'id');

        // Automatically select the first exercise if available
        // if (!empty($this->exercises)) {
        //     $this->selectedExercise = array_key_first($this->exercises);
        //     $this->calculateVolume();
        // }
    }

    // public function updatedSelectedExercise()
    // {
    //     $this->calculateVolume();
    // }
    // Livewire method to watch changes to a property
    public function updated($propertyName)
    {
        if ($propertyName === 'selectedExercise') {
            $this->calculateVolume();
        }
    }

    public function calculateVolume()
    {
        $this->volumeData = [];

        // Get the start of the week
        $startOfWeek = Carbon::now()->startOfWeek();

        // Fetch the sets for the selected exercise in the current week
        $setLogs = SetLog::whereHas('exerciseLog', function ($query) {
            $query->where('exercise_log_id', $this->selectedExercise);
        })->whereHas('exerciseLog.workoutLog', function ($query) use ($startOfWeek) {
            $query->where('user_id', Auth::id())
                ->where('workout_date', '>=', $startOfWeek);
        })->get();

        // dd($setLogs);

        // Calculate volume
        foreach ($setLogs as $set) {
            $volume = $set->reps * $set->weight;
            // $date = $set->exerciseLog->workoutLog->workout_date->format('Y-m-d');
            // Ensure workout_date is a Carbon instance
            $workoutDate = Carbon::parse($set->exerciseLog->workoutLog->workout_date);
            $date = $workoutDate->format('Y-m-d');

            if (!isset($this->volumeData[$date])) {
                $this->volumeData[$date] = 0;
            }
            $this->volumeData[$date] += $volume;
        }

        // Convert to a format suitable for the chart
        $this->volumeData = array_map(function ($date, $volume) {
            return ['date' => $date, 'volume' => $volume];
        }, array_keys($this->volumeData), $this->volumeData);

        // dd($this->volumeData);
        $this->dispatch('updateChart', $this->volumeData);
    }
    public function render()
    {
        // dd($this->volumeData);
        return view('livewire.weekly-volume-chart');
        // dd($this->exercises);
        // return view('livewire.weekly-volume-chart', [
        //     'exercises' => $this->exercises,
        // ]);
    }
}