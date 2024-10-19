<?php

// app/Console/Commands/MembershipExpire.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Filament\Notifications\Notification; // Import the Notification class

class MembershipExpire extends Command
{
    protected $signature = 'membership:expire';
    protected $description = 'Check for expired memberships and notify users';

    public function handle()
    {
        $currentDate = now();
        $users = User::where('membership_end_date', '<=', $currentDate)->get();

        foreach ($users as $user) {
            // Send notification to the Filament dashboard
            $user->notify(
                Notification::make()
                    ->title('Your membership has expired')
                    ->body('Please renew your membership to continue enjoying our services.')
                    ->toDatabase()
            );

            // Optionally, log or print a message
            $this->info("Notification sent to: {$user->email}");
        }
    }
}
