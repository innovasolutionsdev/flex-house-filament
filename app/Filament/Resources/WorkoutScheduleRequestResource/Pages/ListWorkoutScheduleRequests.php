<?php

namespace App\Filament\Resources\WorkoutScheduleRequestResource\Pages;

use App\Filament\Resources\WorkoutScheduleRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkoutScheduleRequests extends ListRecords
{
    protected static string $resource = WorkoutScheduleRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Create New Request'),
        ];
    }
}