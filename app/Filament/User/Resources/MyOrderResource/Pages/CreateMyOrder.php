<?php

namespace App\Filament\User\Resources\MyOrderResource\Pages;

use App\Filament\User\Resources\MyOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMyOrder extends CreateRecord
{
    protected static string $resource = MyOrderResource::class;
}