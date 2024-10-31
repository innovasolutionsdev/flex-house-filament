<?php

namespace App\Observers;

use App\Models\Booking;
use App\Models\User;
use App\Notifications\BookingSubmitted;
use NotificationChannels\OneSignal\OneSignalChannel;


use Filament\Notifications\Notification;

class Bookingobserver
{
    public function created(Booking $booking):void
    {
        $admin = User::where('role', 1)->first();

        $recipient = User::where('role', 1)->first();

        $recipient->notify(
            Notification::make()
                ->title('You have new booking ')
                ->toDatabase(),

        );
        OneSignalMessage::create()
            ->subject("New Booking!")
            ->body("A new booking has been made.");


        // Send a notification to the admin
//        Notification::send($admin, new BookingSubmitted($booking)
//
//        );
    }
}
