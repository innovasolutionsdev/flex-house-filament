<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MembershipExpire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:membership-expire';

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
        // Get the current date
        $currentDate = now();

        // Fetch users with expired memberships
        $users = User::where('membership_end_date', '<=', $currentDate)->get();

        foreach ($users as $user) {
            // Send notification (email, SMS, etc.)
//            Mail::to($user->email)->send(new MembershipExpired($user));

            // Optionally, log or print a message
            $this->info("Notification sent to: {$user->email}");
        }
    }
}
