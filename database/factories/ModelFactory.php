<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Nakd\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\Nakd\Models\Country::class, function (Faker\Generator $faker) {
    return [
        'name'              => $faker->country,
        'alpha-2'           => $faker->countryCode,
        'alpha-3'           => $faker->countryISOAlpha3,
        'country-code'      => $faker->countryCode,
        'iso_3166-2'        => $faker->iso8601,
        'region'            => $faker->name,
        'sub-region'        => $faker->name,
        'region-code'       => $faker->countryCode,
        'sub-region-code'   => $faker->countryISOAlpha3
    ];
});

