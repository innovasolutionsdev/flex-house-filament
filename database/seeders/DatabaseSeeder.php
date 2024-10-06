<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'Admin@admin.com',
            'password' => bcrypt('admin'),
            'role' => 1,
        ]);


        $this -> call([
            MealPlanSeeder::class,
        ]);

        $this -> call([
            CategorySeeder::class,
        ]);

        $this -> call([
            ProductsSeeder::class,
        ]);
        $this->call([
            SubscriptionSeeder::class,
        ]);
    }
}
