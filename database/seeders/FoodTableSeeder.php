<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodTableSeeder extends Seeder
{
    public function run()
    {
        Food::create([
            'name' => 'Bacon Burger',
            'price' => 200,
            'description' => 'Delicious burger with crispy bacon and cheese.',
            'type' => 'Western',
            'picture' => 'resources/image/bacon dog.jpeg',
        ]);

        Food::create([
            'name' => 'Little Bacon Burger',
            'price' => 150,
            'description' => 'Delicious burger with crispy bacon and cheese.',
            'type' => 'Indian',
            'picture' => 'resources/image/little bacon burger.jpg',
        ]);

        // Add more food items if you want
    }
}

