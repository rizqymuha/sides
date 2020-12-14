<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Province;
use App\Regency;
use Faker\Generator as Faker;

$factory->define(Regency::class, function (Faker $faker) {
    $randomNumber = rand(1,2);
    return [
        'province_id' => Province::inRandomOrder()->first()->id,
        'name' => $faker->unique()->streetSuffix,
        'status' => ($randomNumber == 1) ? 'kota' : 'kabupaten',
    ];
});
