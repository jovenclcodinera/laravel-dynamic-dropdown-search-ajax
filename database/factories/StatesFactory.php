<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\State;
use Faker\Generator as Faker;

$factory->define(State::class, function (Faker $faker) {
    return [
        "name"=>$faker->state,
        "country_id"=>$faker->numberBetween(1, 3)
    ];
});
