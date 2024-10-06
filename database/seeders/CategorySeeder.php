<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = array(
           array(
                'name' => 'Meat',
                'slug' => 'Meat',
                'status' => true,
           ),
           array(
                'name' => 'Keto',
                'slug' => 'Keto',
                'status' => true,
           ),
            array(
                'name' => 'Vegan',
                'slug' => 'Vegan',
                'status' => true,
            ),
            array(
                'name' => 'Pescatarian',
                'slug' => 'Pescatarian',
                'status' => true,
            ),
            array(
                'name' => 'Gluten-Free',
                'slug' => 'Gluten-Free',
                'status' => true,
            ),

        );

        foreach ($categories as $value) {
            \App\Models\category::create([
                'name' => $value['name'],
                'slug' => \Illuminate\Support\Str::slug($value['name']),
                'status' => $value['status'],
            ]);
        }
    }
}
