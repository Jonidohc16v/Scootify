<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Escooters;
use Database\Factories\EscootersFactory;

class EscooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Escooters::factory()->count(50)->create(); 
    }
}
