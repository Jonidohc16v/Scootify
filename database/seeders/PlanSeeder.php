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
                'description' => '24h of pure fun with your e-scooters!',
                'ends_at' => 1
            ],
            [
                'name' => 'Monthly', 
                'price' => 15, 
                'description' => 'Enjoy your e-scooter journey for one month!',
                'ends_at' => 30
            ],
            [
                'name' => 'Yearly', 
                'price' => 50, 
                'description' => ' A whole year of care free and pure enjoyment!',
                'ends_at' => 365
            ]
        ];
  
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
