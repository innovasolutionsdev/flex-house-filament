<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'workout_id'];

    public function exercises()
    {
        return $this->hasMany(WorkoutLogExercise::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function workout()
    // {
    //     return $this->belongsTo(Workout::class);
    // }
    public function workout()
    {
        return $this->belongsTo(Workout::class, 'workout_id');
    }
}
