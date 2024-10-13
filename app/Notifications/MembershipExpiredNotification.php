<?php
namespace App\Notifications;

use Illuminate\Notifications\Notification;

class MembershipExpiredNotification extends Notification
{
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => 'Your membership has expired.',
            'url' => route('user.memberships'), // Update with the correct route
        ];
    }
}
