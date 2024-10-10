<?php

namespace Database\Seeders;

use App\Models\MembershipPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MembershipPlan::create([
            'name' => 'Student',
            'price' => 7500,
            'duration' => 30, // 30 days
        ]);

        MembershipPlan::create([
            'name' => 'Standard Plan',
            'price' => 12000,
            'duration' => 60, // 60 days
        ]);

        MembershipPlan::create([
            'name' => '3 Months',
            'price' => 18000,
            'duration' => 90, // 90 days
        ]);

        MembershipPlan::create([
            'name' => 'Annual',
            'price' => 32000,
            'duration' => 365, // 365 days
        ]);

        MembershipPlan::create([
            'name' => '6 Months',
            'price' => 23000,
            'duration' => 180, // 7 days
        ]);
    }
}
