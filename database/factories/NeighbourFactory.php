<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hamlet;
use App\Neighbour;
use Faker\Generator as Faker;

$factory->define(Neighbour::class, function (Faker $faker) {
    $randomNumber = rand(100, 500);
    return [
        'hamlet_id' => Hamlet::inRandomOrder()->first()->id,
        'number' => $randomNumber,
    ];
});
