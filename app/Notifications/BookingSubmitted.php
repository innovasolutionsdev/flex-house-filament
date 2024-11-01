<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;
use NotificationChannels\WebPush\WebPushMessage;

class BookingSubmitted extends Notification
{
    use Queueable;

    public $booking;

    /**
     * Create a new notification instance.
     */
    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    /**
     * Get the notification's delivery channels.
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     */
//    public function toDatabase($notifiable)
//    {
//        return [
//            booking_id => $this->booking->id,
//            'user' => $this->booking->first_name,
//            'message' => 'New booking submitted by ' . $this->booking->first_name,
//        ];
//    }

    public function toWebPush($notifiable, $notification)
    {
        return (new WebPushMessage)
            ->title('New Booking')
            ->icon('/path-to-icon/icon.png')
            ->body("A new booking has been made: {$this->bookingDetails}")
            ->action('View Booking', url('/admin/bookings'))
            ->badge('/path-to-icon/badge.png');
    }

    public function toArray($notifiable)
    {
        return [
            'bookingDetails' => $this->booking,
        ];
    }
}
