<?php

namespace App\Filament\Resources\MembershipPaymentResource\Pages;

use App\Filament\Resources\MembershipPaymentResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMembershipPayment extends CreateRecord
{
    protected static string $resource = MembershipPaymentResource::class;


    protected function afterCreate(): void
    {
        // Assuming the payment has a user_id associated with it
        $user = User::find($this->record->user_id);

        if ($user) {
            // Update the status of the user after the payment is made
            $user->update([
                'status' => 1, // Setting status as 'active' (1)
            ]);
        }
    }
}
