<?php

namespace App\Console\Commands;

use App\Models\Subscription;
use App\Models\User;
use App\Notifications\MembershipExpiredNotification;
use Illuminate\Console\Command;
use Filament\Notifications\Notification;

class NotifyExpiredSubscriptions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notify-expired-subscriptions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $expiredSubscriptions = User::where('membership_end_date', '<=', now())
            ->get();

        foreach ($expiredSubscriptions as $subscription) {
            // Send notification (using Laravel's Notification system)
            // You can create a notification class and use it here


            $subscription->notify(
                Notification::make()
                    ->title('Membership Expired')
                    ->toDatabase(),
            );
        }
    }
}
