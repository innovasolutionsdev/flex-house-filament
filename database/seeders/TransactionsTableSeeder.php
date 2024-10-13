<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            [
                'amount' => 5000.00,
                'type' => 'income',
                'description' => 'Monthly membership fee',
                'category_id' => 1, // Assuming category 1 is for memberships
                'date' => '2024-10-01',
            ],
            [
                'amount' => 2500.00,
                'type' => 'income',
                'description' => 'Personal training session',
                'category_id' => 2, // Assuming category 2 is for personal training
                'date' => '2024-10-05',
            ],
            [
                'amount' => 12000.00,
                'type' => 'income',
                'description' => '6-month membership renewal',
                'category_id' => 1, // Membership category
                'date' => '2024-09-20',
            ],
            [
                'amount' => 32000.00,
                'type' => 'expense',
                'description' => 'Gym equipment repair',
                'category_id' => 3, // Assuming category 3 is for expenses
                'date' => '2024-10-03',
            ],
            [
                'amount' => 48000.00,
                'type' => 'income',
                'description' => 'Annual membership plan',
                'category_id' => 1, // Membership category
                'date' => '2024-10-08',
            ],
        ];

        foreach ($transactions as $value) {
        Transaction::create($value);
    }

    }
}
