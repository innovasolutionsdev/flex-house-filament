<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'workout_id', 'date'];

    // Each workout log belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Each workout log belongs to a specific workout
    public function workout()
    {
        return $this->belongsTo(Workout::class);
    }

    // A workout log has many exercise logs
    public function exerciseLogs()
    {
        return $this->hasMany(ExerciseLog::class);
    }
}
