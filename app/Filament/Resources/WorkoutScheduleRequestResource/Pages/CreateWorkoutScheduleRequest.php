<?php

namespace App\Filament\Resources\WorkoutScheduleRequestResource\Pages;

use App\Filament\Resources\WorkoutScheduleRequestResource;
use App\Models\User;
use App\Notifications\NewScheduleRequestNotification;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWorkoutScheduleRequest extends CreateRecord
{
    protected static string $resource = WorkoutScheduleRequestResource::class;

    protected function afterCreate(): void
    {
        // Get the single admin user
        $admin = User::where('role', 1)->first();

        // Notify the admin if found
        if ($admin) {
            $admin->notify(new NewScheduleRequestNotification($this->record));
        }
    }


}
