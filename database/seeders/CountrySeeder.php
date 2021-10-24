<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Canada'
            ],
            [
                'name' => 'Italy'
            ]
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
