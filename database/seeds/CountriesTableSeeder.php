<?php

use Illuminate\Database\Seeder;
use Nakd\Models\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('TRUNCATE TABLE countries CASCADE;');

        $countries = config('seeds.countries');

        foreach($countries as $country)
        {
            factory(Country::class)->create([
                'name'              => $country['name'],
                'alpha-2'           => $country['alpha-2'],
                'alpha-3'           => $country['alpha-3'],
                'country-code'      => $country['country-code'],
                'iso_3166-2'        => $country['iso_3166-2'],
                'region'            => $country['region'],
                'sub-region'        => $country['sub-region'],
                'region-code'       => $country['region-code'],
                'sub-region-code'   => $country['sub-region-code']
            ]);
        }
    }
}
