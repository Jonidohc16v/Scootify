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
                'capacity' => 10,
                'photo' => 'gare.jpg',
            ],
            [
                'name' => 'Hamilius',
                'address' => '22 Bd Royal, 2449 Ville-Haute',
                'lat' => 49.611034,
                'lon' => 6.126194,
                'capacity' => 10,
                'photo' => 'hamilius.jpg',
            ],
            [
                'name' => 'Glacis',
                'address' => '1 Bd Robert Schuman, 2525 Ville-Haute',
                'lat' => 49.617656,
                'lon' => 6.125476,
                'capacity' => 10,
                'photo' => 'glacis.jpg',
            ],
            [
                'name' => 'Grund',
                'address' => '28 Mnt du Grund, 1645 Ville-Haute',
                'lat' => 49.608425,
                'lon' => 6.135106,
                'capacity' => 10,
                'photo' => 'grund.jpg',
            ],
            [
                'name' => 'Kirchberg',
                'address' => '5 Rue Alphonse Weicker, 2721 Kirchberg',
                'lat' => 49.63231,
                'lon' => 6.170772,
                'capacity' => 10,
                'photo' => 'kirchberg.jpeg',
            ],
            [
                'name' => 'Cloche d´Or',
                'address' => '25 Bd Friedrich Wilhelm, 2411 Gasperich',
                'lat' => 49.583736,
                'lon' => 6.124974,
                'capacity' => 10,
                'photo' => 'clochedor.jpeg',
            ]
        ];
        foreach ($stations as $station) {
            Station::create($station);
        }
    }
}
