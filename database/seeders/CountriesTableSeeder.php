<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    protected $countries = [[
        'iso' => 'PHL',
        'name' => 'Filipijnen'
    ], [
        'iso' => 'NL',
        'name' => 'Nederland',
    ]];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->countries as $country) {

            Country::updateOrCreate([
                'iso' => $country['iso']
            ], [
                'name' => $country['name'],
            ]);
        }
    }
}
