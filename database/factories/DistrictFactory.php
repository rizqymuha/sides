<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\District;
use App\Regency;
use Faker\Generator as Faker;

$factory->define(District::class, function (Faker $faker) {
    return [
        'regency_id' => Regency::inRandomOrder()->first()->id,
        'name' => $faker->unique()->streetName,
    ];
});
