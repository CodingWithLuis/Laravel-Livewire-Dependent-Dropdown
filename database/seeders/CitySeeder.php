<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'name' => 'Toronto',
                'country_id' => 1 //Canada
            ],
            [
                'name' => 'Ontario',
                'country_id' => 1
            ],
            [
                'name' => 'Florence',
                'country_id' => 2
            ],
            [
                'name' => 'Palermo',
                'country_id' => 2
            ]
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
