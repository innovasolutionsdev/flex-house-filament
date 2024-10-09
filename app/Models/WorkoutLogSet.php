<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutLogSet extends Model
{
    use HasFactory;

    // protected $fillable = ['workout_log_exercise_id', 'weight', 'reps', 'order'];
    protected $fillable = ['workout_log_exercise_id', 'weight', 'reps'];

    public function exerciseLog()
    {
        return $this->belongsTo(WorkoutLogExercise::class);
    }
}
