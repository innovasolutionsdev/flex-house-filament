<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RevenueCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('revenue_categories')->insert([
            [
                'name' => 'Membership Fees',
                'type' => 'income',  // Type for this category
            ],
            [
                'name' => 'Personal Training',
                'type' => 'income',  // Type for this category
            ],
            [
                'name' => 'Gym Expenses',
                'type' => 'expense',  // Type for this category
            ],
            [
                'name' => 'Equipment Purchase',
                'type' => 'expense',  // Type for this category
            ],
            [
                'name' => 'Merchandise Sales',
                'type' => 'income',  // Type for this category
            ],
        ]);
    }
}
