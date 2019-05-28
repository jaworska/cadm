<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Offer;
use Faker\Generator as Faker;

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'title' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
        'location' => rand(1,2),
        'range' => $faker -> paragraph($nbSentences = 6, $variableNbSentences = true),
        'offer' => $faker -> paragraph($nbSentences = 6, $variableNbSentences = true),
        'requirements' => $faker -> paragraph($nbSentences = 6, $variableNbSentences = true),
        'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'priority' =>  Offer::all() -> max('priority')+1??1
    ];
});
