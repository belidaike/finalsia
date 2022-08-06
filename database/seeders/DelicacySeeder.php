<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Delicacys;

class DelicacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $delicacys = [
            [
                'place_id' => '1',
                'food' => 'Crayfishs',
                'texture' => 'Creamy',
                'taste' => 'Slightly sweet'
            ],
            [
                'place_id' => '2',
                'food' => 'Croissants',
                'texture' => 'Chewy, Rough, Slightly hard',
                'taste' => 'sweet'
            ],
        ];

        foreach($delicacys as $delicacy) {
            Delicacys::create($delicacy);
        }
    
    }
}
