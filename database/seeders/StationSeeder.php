<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $stations = [
            [
                'name' => 'Gare',
                'address' => '11 Pl. de la Gare, 1616 Gare Luxembourg',
                'lat' => 49.599155,
                'lon' => 6.133000,
                'capacity' => 3,
                'photo' => 'gare.jpg',
                'user_id' => 1,
                'escooters_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hamilius (Tram)',
                'address' => '22 Bd Royal, 2449 Ville-Haute',
                'lat' => 49.611034,
                'lon' => 6.126194,
                'capacity' => 3,
                'photo' => 'hamilius.jpg',
                'user_id' => 2,
                'escooters_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Glacis',
                'address' => '1 Bd Robert Schuman, 2525 Ville-Haute',
                'lat' => 49.617656,
                'lon' => 6.125476,
                'capacity' => 14,
                'photo' => 'glacis.jpg',
                'user_id' => 3,
                'escooters_id' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Grund',
                'address' => '28 Mnt du Grund, 1645 Ville-Haute',
                'lat' => 49.608425,
                'lon' => 6.135106,
                'capacity' => 9,
                'photo' => 'grund.jpg',
                'user_id' => 4,
                'escooters_id' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kirchberg',
                'address' => '5 Rue Alphonse Weicker, 2721 Kirchberg',
                'lat' => 49.63231,
                'lon' => 6.170772,
                'capacity' => 15,
                'photo' => 'kirchberg.jpeg',
                'user_id' => 5,
                'escooters_id' => 26,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cloche d´Or',
                'address' => '25 Bd Friedrich Wilhelm Raiffeisen, 2411 Gasperich',
                'lat' => 49.583736,
                'lon' => 6.124974,
                'capacity' => 23,
                'photo' => 'clochedor.jpeg',
                'user_id' => 6,
                'escooters_id' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        foreach ($stations as $station) {
            Station::create($station);
        }
    }
}
