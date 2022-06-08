<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        //
        'buyer_id' => $faker->numberBetween($min = 6, $max = 57),
        'seller_id' => $faker->numberBetween($min = 6, $max = 57),
        'gig_id' => $faker->numberBetween($min = 219, $max = 418),
        'delivery' => $faker->numberBetween($min = 1, $max = 5),
        'revision' => $faker->numberBetween($min = 1, $max = 5),
        'amount' => $faker->numberBetween($min = 200, $max = 1000),
        'status' => $faker->randomElement($array = array ('0','1','2')),
        'is_reviewed' => "1"
    ];
});
