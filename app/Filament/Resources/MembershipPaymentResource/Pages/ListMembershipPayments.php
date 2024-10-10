<?php

namespace App\Filament\Resources\MembershipPaymentResource\Pages;

use App\Filament\Resources\MembershipPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMembershipPayments extends ListRecords
{
    protected static string $resource = MembershipPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
