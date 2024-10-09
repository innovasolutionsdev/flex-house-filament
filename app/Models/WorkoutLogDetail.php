<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutLogDetail extends Model
{
    use HasFactory;

    protected $fillable = ['workout_log_id', 'exercise_id', 'set_number', 'reps', 'weight'];

    public function workoutLog()
    {
        return $this->belongsTo(WorkoutLog::class);
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}
