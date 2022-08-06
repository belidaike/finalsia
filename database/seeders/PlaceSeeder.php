<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $places = [
            [
                'delicacys_id' => '1',
                'name' => 'South Island, New Zealand',
                'type' => 'land of rugged coast and rolling plains',
            ],
            [
                'delicacys_id' => '2',
                'name' => 'Paris',
                'type' => 'one of eight départements of the Île-de-France administrative region',
            ],
        ];

        foreach($places as $place) {
            Place::create($place);
        }
    }
    
}
