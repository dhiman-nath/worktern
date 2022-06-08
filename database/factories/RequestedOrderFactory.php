<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RequestedOrder;
use Faker\Generator as Faker;

$factory->define(RequestedOrder::class, function (Faker $faker) {
    return [
        //
        'buyer_id' => $faker->numberBetween($min = 6, $max = 57),
        'seller_id' => $faker->numberBetween($min = 6, $max = 57),
        'category_id' => $faker->randomElement($array = array (2,6,7,8,9)),
        'gig_id' => $faker->numberBetween($min = 219, $max = 418),
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
        'duration' => $faker->numberBetween($min = 1, $max = 5),
        'amount' => $faker->numberBetween($min = 200, $max = 1000),
        'is_reviewed' => "1",
        'status' => $faker->randomElement($array = array ('0','1','2','3')),

    ];
});
