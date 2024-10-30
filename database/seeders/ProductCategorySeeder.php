<?php

namespace Database\Seeders;


use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Protein Powders'],
            ['name' => 'Vitamins & Minerals'],
            ['name' => 'Pre-Workout'],
            ['name' => 'Post-Workout Recovery'],
            ['name' => 'Fat Burners'],
        ];

        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
    }
}