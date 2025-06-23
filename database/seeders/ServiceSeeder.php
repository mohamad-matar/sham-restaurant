<?php

namespace Database\Seeders;

use App\Models\Meal;
use App\Models\MealRequest;
use App\Models\Service;
use App\Models\ServiceRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'id' => 1,
                'name_ar' => 'بيتزا',
                'name_en' => 'Pizza',
                'price' => 20000,
            ],
            [
                'id' => 2,
                'name_ar' => 'دجاج',
                'name_en' => 'checken',
                'price' => 100000,

            ],
            [
                'id' => 3,
                'name_ar' => 'ساندوش',
                'name_en' => 'sandwish',
                'price' => 5000,
            ],

        ];
        $serviceRequests = [
            [
                'email' => 'any@one.com',
                'quantity' => 2,
                'service_id' => 1,
            ],
            
        ];
        Service::insert($services);
        ServiceRequest::insert($serviceRequests);
    }
}
