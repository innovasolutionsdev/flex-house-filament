<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseLog extends Model
{
    use HasFactory;

    protected $fillable = ['workout_log_id', 'exercise_id', 'sets', 'reps', 'weight'];

    // Each exercise log belongs to a workout log
    public function workoutLog()
    {
        return $this->belongsTo(WorkoutLog::class);
    }

    // Each exercise log belongs to an exercise
    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}
