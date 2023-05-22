<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Daily', 
                'price' => 5, 
                'description' => '24h of pure fun with your e-scooters!'
            ],
            [
                'name' => 'Monthly', 
                'price' => 15, 
                'description' => 'Enjoy your e-scooter journey for one month!'
            ],
            [
                'name' => 'Yearly', 
                'price' => 50, 
                'description' => ' A whole year of care free and pure enjoyment!'
            ]
        ];
  
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
