<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('membership_payments')->insert([
            [
                'user_id' => 1,  // Assuming user ID 1 exists
                'amount' => 5000.00,
                'payment_date' => Carbon::now()->subDays(5),
                'payment_method' => 'cash',
            ],
            [
                'user_id' => 2,  // Assuming user ID 2 exists
                'amount' => 12000.00,
                'payment_date' => Carbon::now()->subDays(10),
                'payment_method' => 'credit card',
            ],
            [
                'user_id' => 3,  // Assuming user ID 3 exists
                'amount' => 7500.00,
                'payment_date' => Carbon::now()->subDays(3),
                'payment_method' => 'cash',
            ],
            [
                'user_id' => 4,  // Assuming user ID 4 exists
                'amount' => 6000.00,
                'payment_date' => Carbon::now()->subDays(7),
                'payment_method' => 'credit card',
            ],
            [
                'user_id' => 5,  // Assuming user ID 5 exists
                'amount' => 2500.00,
                'payment_date' => Carbon::now(),
                'payment_method' => 'cash',
            ],
        ]);
    }
}
