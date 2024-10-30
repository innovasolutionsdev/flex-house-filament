<?php
namespace App\Observers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class BookingObserver
{
    public function created(Booking $booking): void
    {
        // Fetch the admin with the role ID (assuming '1' is the admin role)
        $admin = User::where('role', 1)->first();

        if ($admin && $admin->fcm_token) {
            // Send the notification via Firebase Cloud Messaging (FCM)
            $this->sendPushNotification($admin->fcm_token, 'You have a new booking!');
        }
    }

    private function sendPushNotification($fcmToken, $message)
    {
        $serverKey = env('FCM_SERVER_KEY'); // Store your Firebase server key in .env

        Http::withHeaders([
            'Authorization' => 'key=' . $serverKey,
            'Content-Type' => 'application/json',
        ])->post('https://fcm.googleapis.com/fcm/send', [
            'to' => $fcmToken,
            'notification' => [
                'title' => 'New Booking Notification',
                'body' => $message,
            ],
//            'data' => [
//                'booking_id' => $booking->id, // Additional data if needed
//            ],
        ]);
    }
}
