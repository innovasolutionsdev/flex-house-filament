<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Notification;

class NewScheduleRequestNotification extends Notification
{
    use Queueable;

    protected $scheduleRequest;

    /**
     * Create a new notification instance.
     */
    public function __construct($scheduleRequest)
    {
        $this->scheduleRequest = $scheduleRequest;
    }

    /**
     * Get the notification's delivery channels.
     */
    public function via($notifiable)
    {
        return ['database']; // Only database notifications
    }

    /**
     * Get the array representation of the notification for the database.
     */
    public function toArray($notifiable)
    {
        return [
            'message' => "A new schedule request has been created by {$this->scheduleRequest->user->name}.",
            'schedule_request_id' => $this->scheduleRequest->id,
            'created_at' => now(),
        ];
    }

    public function toDatabase($notifiable)
    {
        return [
            'booking_id' => $this->scheduleRequest->id,
            'message' => 'New booking submitted by'
        ];
    }
}
