<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        "name"=>$faker->company,
        "email"=>$faker->unique()->companyEmail,
        "address"=>$faker->address,
        "state_id"=>$faker->numberBetween(1, 6),
        "phone"=>$faker->phoneNumber
    ];
});
