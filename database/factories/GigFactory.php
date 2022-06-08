<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Gig;
use Faker\Generator as Faker;

$factory->define(Gig::class, function (Faker $faker) {
    return [
        //
        'seller_id' => $faker->numberBetween($min = 6, $max = 57),
        'cat_id' => $faker->randomElement($array = array (2,6,7,8,9)),
        'parent_cat_id' => $faker->randomElement($array = array (1,3,4,5,10)),
        'gig_title' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'gig_description' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
        'gig_image' => 'https://picsum.photos/203/140',
    ];
});
