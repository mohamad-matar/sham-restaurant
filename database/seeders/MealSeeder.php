<?php

namespace Database\Seeders;

use App\Models\Meal;
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
                'name' => 'Pizza',                
            ],
            [
                'name' => 'checken',                
            ],
            [
                'name' => 'sandwish',                
            ],
            
        ];
        Meal::insert($meals);
    }
}
