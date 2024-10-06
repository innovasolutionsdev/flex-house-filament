<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

// sample products array with all the fields
        $dishes = array(
            array(
                'category' => 'meat',
                'name' => 'Family Feast Vegetarian Box',
                'slug' => 'family-feast-vegetarian-box',
                'price' => 2000, // LKR
                'description' => 'A vegetarian meal kit perfect for a family of four. Includes fresh vegetables, grains, and spices.',
                'status' => 1,
                'meta_title' => 'Vegetarian Family Feast',
                'meta_description' => 'Enjoy a hearty vegetarian meal with our specially curated meal kit. Perfect for family dinners!',
                'meta_keywords' => 'meal kit, vegetarian, family box',
            ),
            array(
                'category' => 'keto',
                'name' => 'Classic Chicken Dinner',
                'slug' => 'classic-chicken-dinner',
                'price' => 1500, // LKR
                'description' => 'Everything you need to cook a delicious chicken dinner with sides. Feeds 2-3 people.',
                'status' => 1,
                'meta_title' => 'Easy Chicken Dinner Meal Kit',
                'meta_description' => 'Whip up a quick and tasty chicken dinner with our easy-to-follow meal kit.',
                'meta_keywords' => 'chicken, meal kit, easy dinner'
            ),
            array(
                'category' => 'vegan',
                'name' => 'Italian Pasta Night Kit',
                'slug' => 'italian-pasta-night-kit',
                'price' => 1800, // LKR
                'description' => 'Create an authentic Italian pasta dish with high-quality ingredients sourced directly from Italy.',
                'status' => 1,
                'meta_title' => 'Italian Pasta Night',
                'meta_description' => 'Bring Italy to your table with our Italian Pasta Night Kit, complete with all ingredients and a recipe.',
                'meta_keywords' => 'pasta, Italian, meal kit'
            ),
            array(
                'category' => 'meat',
                'name' => 'Keto-Friendly Avocado Bowl',
                'slug' => 'keto-friendly-avocado-bowl',
                'price' => 2200, // LKR
                'description' => 'A low-carb, keto-friendly meal featuring fresh avocados, lean proteins, and healthy fats.',
                'status' => 1,
                'meta_title' => 'Keto Avocado Bowl',
                'meta_description' => 'Stay on track with our delicious, keto-friendly avocado bowl meal kit.',
                'meta_keywords' => 'keto, healthy, meal kit'
            ),
            array(
                'category' => 'meat',
                'name' => 'Sri Lankan Chicken Curry with Rice and Coconut Sambol',
                'slug' => 'sri-lankan-chicken-curry-rice-coconut-sambol',
                'price' => 1900, // LKR
                'description' => 'A traditional Sri Lankan chicken curry served with steamed rice and a side of spicy coconut sambol.',
                'status' => 1,
                'meta_title' => 'Sri Lankan Chicken Curry Meal',
                'meta_description' => 'Enjoy the rich and spicy flavors of our Sri Lankan chicken curry meal kit.',
                'meta_keywords' => 'Sri Lankan, chicken, curry, meal kit'
            ),
            array(
                'category' => 'meat',
                'name' => 'Sri Lankan Beef Fry with Yellow Rice and Eggplant Moju',
                'slug' => 'sri-lankan-beef-fry-yellow-rice-eggplant-moju',
                'price' => 2300, // LKR
                'description' => 'Spicy Sri Lankan beef fry served with fragrant yellow rice and sweet and sour eggplant moju.',
                'status' => 1,
                'meta_title' => 'Sri Lankan Beef Fry Meal',
                'meta_description' => 'Experience the bold flavors of our Sri Lankan beef fry meal kit.',
                'meta_keywords' => 'Sri Lankan, beef, fry, meal kit'
            ),
            array(
                'category' => 'meat',
                'name' => 'Sri Lankan Pork Black Curry with Pol Roti and Lunu Miris',
                'slug' => 'sri-lankan-pork-black-curry-pol-roti-lunu-miris',
                'price' => 2100, // LKR
                'description' => 'Rich and intense pork black curry served with pol roti (coconut roti) and spicy lunu miris.',
                'status' => 1,
                'meta_title' => 'Sri Lankan Pork Black Curry Meal',
                'meta_description' => 'Savor the deep flavors of our Sri Lankan pork black curry meal kit.',
                'meta_keywords' => 'Sri Lankan, pork, black curry, meal kit'
            ),
            array(
                'category' => 'meat',
                'name' => 'Sri Lankan Mutton Curry with String Hoppers and Kiri Hodi',
                'slug' => 'sri-lankan-mutton-curry-string-hoppers-kiri-hodi',
                'price' => 2400, // LKR
                'description' => 'Hearty mutton curry served with string hoppers (rice flour noodles) and coconut milk gravy (kiri hodi).',
                'status' => 1,
                'meta_title' => 'Sri Lankan Mutton Curry Meal',
                'meta_description' => 'Indulge in the rich flavors of our Sri Lankan mutton curry meal kit.',
                'meta_keywords' => 'Sri Lankan, mutton, curry, meal kit'
            ),
            array(
                'category' => 'meat',
                'name' => 'Sri Lankan Chicken Kottu with Raita and Seeni Sambol',
                'slug' => 'sri-lankan-chicken-kottu-raita-seeni-sambol',
                'price' => 1700, // LKR
                'description' => 'Popular street food dish made with shredded roti, chicken, vegetables, served with raita and caramelized onion relish (seeni sambol).',
                'status' => 1,
                'meta_title' => 'Sri Lankan Chicken Kottu Meal',
                'meta_description' => 'Taste the vibrant flavors of our Sri Lankan chicken kottu meal kit.',
                'meta_keywords' => 'Sri Lankan, chicken, kottu, meal kit'
            ),
            array(
                'category' => 'keto',
                'name' => 'Keto-Friendly Avocado Bowl with Grilled Chicken and Coconut Chips',
                'slug' => 'keto-friendly-avocado-bowl-grilled-chicken-coconut-chips',
                'price' => 2100, // LKR
                'description' => 'A low-carb, keto-friendly meal featuring fresh avocados, grilled chicken, and crispy coconut chips.',
                'status' => 1,
                'meta_title' => 'Keto Avocado Bowl',
                'meta_description' => 'Stay on track with our delicious, keto-friendly avocado bowl meal kit.',
                'meta_keywords' => 'keto, healthy, meal kit'
            ),
            array(
                'category' => 'keto',
                'name' => 'Keto Coconut Curry Shrimp with Cauliflower Rice and Spinach',
                'slug' => 'keto-coconut-curry-shrimp-cauliflower-rice-spinach',
                'price' => 2200, // LKR
                'description' => 'A flavorful keto-friendly coconut curry shrimp served with cauliflower rice and sautéed spinach.',
                'status' => 1,
                'meta_title' => 'Keto Coconut Curry Shrimp Meal',
                'meta_description' => 'Enjoy our keto-friendly coconut curry shrimp meal kit.',
                'meta_keywords' => 'keto, shrimp, curry, meal kit'
            ),
            array(
                'category' => 'keto',
                'name' => 'Keto Chicken Skewers with Avocado Salad and Coconut Chutney',
                'slug' => 'keto-chicken-skewers-avocado-salad-coconut-chutney',
                'price' => 1800, // LKR
                'description' => 'Grilled chicken skewers served with a fresh avocado salad and coconut chutney.',
                'status' => 1,
                'meta_title' => 'Keto Chicken Skewers Meal',
                'meta_description' => 'Delight in our keto-friendly chicken skewers meal kit.',
                'meta_keywords' => 'keto, chicken, skewers, meal kit'
            ),
            array(
                'category' => 'keto',
                'name' => 'Keto Beef Stir-Fry with Bell Peppers and Cashew Nuts',
                'slug' => 'keto-beef-stir-fry-bell-peppers-cashew-nuts',
                'price' => 2200, // LKR
                'description' => 'A delicious beef stir-fry made with bell peppers, cashew nuts, and a blend of Sri Lankan spices.',
                'status' => 1,
                'meta_title' => 'Keto Beef Stir-Fry Meal',
                'meta_description' => 'Indulge in our keto-friendly beef stir-fry meal kit.',
                'meta_keywords' => 'keto, beef, stir-fry, meal kit'
            ),
            array(
                'category' => 'keto',
                'name' => 'Keto Spicy Eggplant Curry with Zucchini Noodles',
                'slug' => 'keto-spicy-eggplant-curry-zucchini-noodles',
                'price' => 2000, // LKR
                'description' => 'A savory eggplant curry served over zucchini noodles for a low-carb meal.',
                'status' => 1,
                'meta_title' => 'Keto Spicy Eggplant Curry Meal',
                'meta_description' => 'Enjoy our keto-friendly spicy eggplant curry meal kit.',
                'meta_keywords' => 'keto, eggplant, curry, meal kit'
            ),
        );









foreach ($dishes as $dish) {
  $products =\App\Models\product::create([
      'name' => $dish['name'],
      'slug' => \Illuminate\Support\Str::slug($dish['name']),
      'description' => $dish['description'],
      'status' => $dish['status'],
      'meta_title' => $dish['meta_title'],
      'meta_description' => $dish['meta_description'],
      'meta_keywords' => $dish['meta_keywords'],
      'category' => $dish['category'],
      'price' => $dish['price'],
  ]);
    $extensions = ['jpg', 'jpeg', 'png'];
    $imagePath = null;

    // Iterate over the extensions and check if the file exists
    foreach ($extensions as $extension) {
        $path = public_path('img/products/' . $dish['slug'] . '.' . $extension);
        if (file_exists($path)) {
            $imagePath = $path;
            break;
        }
    }

    // If an image file is found, add it to the media collection
    if ($imagePath) {
        $products->addMedia($imagePath)->toMediaCollection('images');
    }
}

    }
}



