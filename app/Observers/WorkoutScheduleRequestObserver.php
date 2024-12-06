<?php

namespace App\Observers;

use App\Models\User;
use App\Models\WorkoutScheduleRequest;
use App\Notifications\NewScheduleRequestNotification;
use Filament\Notifications\Notification;

class WorkoutScheduleRequestObserver
{
    /**
     * Handle the WorkoutScheduleRequest "created" event.
     */
    public function created(WorkoutScheduleRequest $workoutScheduleRequest): void
    {
        $recipient = User::where('role', 1)->first();

        $recipient->notify(
            Notification::make()
                ->title('A new schedule request has been submitted')
                ->toDatabase(),
        );
    }

    /**
     * Handle the WorkoutScheduleRequest "updated" event.
     */
    public function updated(WorkoutScheduleRequest $workoutScheduleRequest): void
    {
        //
    }

    /**
     * Handle the WorkoutScheduleRequest "deleted" event.
     */
    public function deleted(WorkoutScheduleRequest $workoutScheduleRequest): void
    {
        //
    }

    /**
     * Handle the WorkoutScheduleRequest "restored" event.
     */
    public function restored(WorkoutScheduleRequest $workoutScheduleRequest): void
    {
        //
    }

    /**
     * Handle the WorkoutScheduleRequest "force deleted" event.
     */
    public function forceDeleted(WorkoutScheduleRequest $workoutScheduleRequest): void
    {
        //
    }
}
