<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Escooters;

class EscootersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Escooters::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stations_id' => $this->faker->numberBetween(1, 6),
            'battery_level' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->randomElement([0, 1]),
            'ride_id' =>null
        
        ];
    }
}
