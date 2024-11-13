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
            'description' => 'Perfect for students looking to stay fit for a short period.',
        ]);

        MembershipPlan::create([
            'name' => 'Standard Plan',
            'price' => 12000,
            'duration' => 60, // 60 days
            'description' => 'Ideal for individuals who want a flexible two-month fitness plan.',
        ]);

        MembershipPlan::create([
            'name' => '3 Months',
            'price' => 18000,
            'duration' => 90, // 90 days
            'description' => 'A three-month plan for those committed to a medium-term fitness goal.',
        ]);

        MembershipPlan::create([
            'name' => 'Annual',
            'price' => 32000,
            'duration' => 365, // 365 days
            'description' => 'Best value for those who want to stay dedicated all year round.',
        ]);

        MembershipPlan::create([
            'name' => '6 Months',
            'price' => 23000,
            'duration' => 180, // 180 days
            'description' => 'Great option for half-year fitness enthusiasts.',
        ]);

    }
}
