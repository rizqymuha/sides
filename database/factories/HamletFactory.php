<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hamlet;
use Faker\Generator as Faker;

$factory->define(Hamlet::class, function (Faker $faker) {
    $randomNumber = rand(100, 500);
    return [
        'number' => $randomNumber
    ];
});
