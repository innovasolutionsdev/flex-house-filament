<?php

namespace App\Filament\User\Resources\WorkoutLogResource\Pages;

use App\Filament\User\Resources\WorkoutLogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWorkoutLog extends CreateRecord
{
    protected static string $resource = WorkoutLogResource::class;
}
