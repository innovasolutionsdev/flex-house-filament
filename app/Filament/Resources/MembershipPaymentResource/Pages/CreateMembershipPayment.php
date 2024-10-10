<?php

namespace App\Filament\Resources\MembershipPaymentResource\Pages;

use App\Filament\Resources\MembershipPaymentResource;
use App\Models\MembershipPayment;
use App\Models\Transaction;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMembershipPayment extends CreateRecord
{
    protected static string $resource = MembershipPaymentResource::class;


    protected function afterCreate(): void
    {
        // Get the last created MembershipPayment instance
        $membershipPayment = MembershipPayment::latest()->first();

        if ($membershipPayment) {
            $user = \App\Models\User::find($membershipPayment->user_id);

            if ($user) {
                // Update the status of the user after the payment is made
                $user->update([
                    'status' => 1, // Or whatever status you want to set
                ]);

                // Create a new transaction record
                Transaction::create([
                    'amount' => $membershipPayment->amount,
                    'type' => 'income', // Setting type as income
                    'description' => $user->name, // Description as the user's name
                    'category_id' => 1, // Assuming category_id = 1 for membership payments
                    'date' => $membershipPayment->payment_date, // Payment date
                ]);
            }
        }
    }


}
