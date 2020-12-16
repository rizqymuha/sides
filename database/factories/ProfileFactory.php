<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hamlet;
use App\Neighbour;
use App\Profile;
use App\User;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'phone' => $faker->phoneNumber,
        'hamlet_id' => Hamlet::inRandomOrder()->first()->id,
        'neighbour_id' => Neighbour::inRandomOrder()->first()->id,
    ];
});
