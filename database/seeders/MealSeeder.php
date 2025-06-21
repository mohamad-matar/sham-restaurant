<?php

namespace Database\Seeders;

use App\Models\Meal;
use App\Models\MealRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $meals = [
            [
                'id' => 1,
                'name' => 'Pizza',
                'price' => 20000,
            ],
            [
                'id' => 2,
                'name' => 'checken',
                'price' => 100000,

            ],
            [
                'id' => 3,
                'name' => 'sandwish',
                'price' => 5000,
            ],

        ];
        $mealRequests = [
            [
                'quantity' => 2,
                'meal_id' => 1,
            ],
            [
                'quantity' => 1,
                'meal_id' => 2,
            ],
            [
                'quantity' => 3,
                'meal_id' => 3,
            ],
        ];
        Meal::insert($meals);
        MealRequest::insert($mealRequests);
    }
}
