<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BasicPackage;
use Faker\Generator as Faker;

$factory->define(BasicPackage::class, function (Faker $faker) {

    static $id = 219;

    return [
        //
        'gig_id' => $id++,
        'title' => $faker->sentence($nbWords = 8, $variableNbWords = true),
        'short_description' => $faker->sentence($nbWords = 8, $variableNbWords = true),
        'delivery' => $faker->numberBetween($min = 1, $max = 5),
        'revision' => $faker->numberBetween($min = 1, $max = 5),
        'amount' => $faker->numberBetween($min = 100, $max = 1000),
    ];
});
