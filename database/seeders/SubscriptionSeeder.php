<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscriptions')->insert([
            [
                'user_id' => 1,
                'status' => 1,
                'delivery_time' => '09:00AM-10:00AM',
                'subscription_period' => 1,
                'delivery_date' => Carbon::now()->addDays(1)->toDateString(),
                'price' => 5500,
                'preference' => 'vegetarian',
                'Number_of_meals' => 2,
                'Number_of_servings' => 2,
                'delivery_address' => '123 Main St',
                'city' => 'Springfield',
                'zip' => 12345,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 2,
                'status' => 0,
                'delivery_time' => '11:00AM-12:00AM',
                'subscription_period' => 3,
                'delivery_date' => Carbon::now()->addDays(3)->toDateString(),
                'price' => 2000,
                'preference' => 'Meat',
                'Number_of_meals' => 2,
                'Number_of_servings' => 4,
                'delivery_address' => '456 Maple Ave',
                'city' => 'Riverdale',
                'zip' => 23456,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 3,
                'status' => 1,
                'delivery_time' => '01:00PM-02:00PM',
                'subscription_period' => 6,
                'delivery_date' => Carbon::now()->addDays(5)->toDateString(),
                'price' => 150,
                'preference' => 'Vegan',
                'Number_of_meals' => 4,
                'Number_of_servings' => 2,
                'delivery_address' => '789 Oak Dr',
                'city' => 'Hill Valley',
                'zip' => 34567,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 4,
                'status' => 0,
                'delivery_time' => '09:00AM-10:00AM',
                'subscription_period' => 12,
                'delivery_date' => Carbon::now()->addDays(7)->toDateString(),
                'price' => 30000,
                'preference' => 'Pescatarian',
                'Number_of_meals' => 2,
                'Number_of_servings' => 4,
                'delivery_address' => '321 Pine Ln',
                'city' => 'Smallville',
                'zip' => 45678,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 5,
                'status' => 1,
                'delivery_time' => '11:00AM-12:00AM',
                'subscription_period' => 12,
                'delivery_date' => Carbon::now()->addDays(9)->toDateString(),
                'price' => 2500,
                'preference' => 'Keto',
                'Number_of_meals' => 5,
                'Number_of_servings' => 2,
                'delivery_address' => '654 Elm St',
                'city' => 'Gotham',
                'zip' => 56789,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 6,
                'status' => 1,
                'delivery_time' => '01:00PM-02:00PM',
                'subscription_period' => 3,
                'delivery_date' => Carbon::now()->addDays(2)->toDateString(),
                'price' => 12000,
                'preference' => 'Vegan',
                'Number_of_meals' => 2,
                'Number_of_servings' => 4,
                'delivery_address' => '987 Cedar Ct',
                'city' => 'Metropolis',
                'zip' => 67890,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 7,
                'status' => 0,
                'delivery_time' => '09:00AM-10:00AM',
                'subscription_period' => 6,
                'delivery_date' => Carbon::now()->addDays(4)->toDateString(),
                'price' => 180,
                'preference' => 'Meat',
                'Number_of_meals' => 6,
                'Number_of_servings' => 2,
                'delivery_address' => '123 Main St',
                'city' => 'Springfield',
                'zip' => 12345,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 8,
                'status' => 1,
                'delivery_time' => '11:00AM-12:00AM',
                'subscription_period' => 9,
                'delivery_date' => Carbon::now()->addDays(6)->toDateString(),
                'price' => 220,
                'preference' => 'gluten-free',
                'Number_of_meals' => 4,
                'Number_of_servings' => 2,
                'delivery_address' => '456 Maple Ave',
                'city' => 'Riverdale',
                'zip' => 23456,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 9,
                'status' => 0,
                'delivery_time' => '01:00PM-02:00PM',
                'subscription_period' => 1,
                'delivery_date' => Carbon::now()->addDays(8)->toDateString(),
                'price' => 90000,
                'preference' => 'Meat',
                'Number_of_meals' => 5,
                'Number_of_servings' => 2,
                'delivery_address' => '789 Oak Dr',
                'city' => 'Hill Valley',
                'zip' => 34567,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 10,
                'status' => 1,
                'delivery_time' => '09:00AM-10:00AM',
                'subscription_period' => 12,
                'delivery_date' => Carbon::now()->addDays(10)->toDateString(),
                'price' => 26000,
                'preference' => 'pescatarian',
                'Number_of_meals' => 4,
                'Number_of_servings' => 4,
                'delivery_address' => '321 Pine Ln',
                'city' => 'Smallville',
                'zip' => 45678,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
