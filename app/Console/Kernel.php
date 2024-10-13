<?php

namespace App\Console;

use App\Jobs\SendMembershipExpirationNotifications;
use App\Models\User;
use App\Notifications\MembershipExpiredNotification;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Notification;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
//       $schedule->command('notify:expired-subscriptions')->everyMinute();
//
//        $schedule->call(function () {
//            // Find users whose membership end date is today or in the past and haven't been notified yet
//            $users = User::where('membership_end_date', '=', Carbon::now())
//                ->whereNull('membership_notified') // Assuming you have this flag to prevent repeated notifications
//                ->get();
//
//            foreach ($users as $user) {
//                // Send notification
//                Notification::send($user, new MembershipExpiredNotification());
//
//                // Mark the user as notified to avoid sending duplicate notifications
//                $user->update(['membership_notified' => Carbon::now()]);
//            }
//        })->everyMinute();

        $schedule->job(SendMembershipExpirationNotifications::class)->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
