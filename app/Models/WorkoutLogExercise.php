<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutLogExercise extends Model
{
    use HasFactory;

    protected $fillable = ['workout_log_id', 'exercise_id'];

    public function workoutLog()
    {
        return $this->belongsTo(WorkoutLog::class);
    }

    public function sets()
    {
        return $this->hasMany(WorkoutLogSet::class);
    }

}
