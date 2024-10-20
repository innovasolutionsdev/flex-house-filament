<?php

namespace App\Filament\Resources\ScheduleResource\Pages;

use App\Filament\Resources\ScheduleResource;
use Filament\Actions;
use Filament\Forms\Components\Grid;
use Filament\Widgets\Card;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ViewRecord;

class ViewSchedule extends ViewRecord
{
    protected static string $resource = ScheduleResource::class;

    // protected static string $view = 'filament.custom-view-schedule';

    // protected function getViewData(): array
    // {
    //     return [
    //         'schedule' => $this->record->schedule,
    //     ];
    // }


}
