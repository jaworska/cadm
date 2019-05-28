<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Offer;
use Faker\Generator as Faker;

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'title' => $faker -> sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker -> paragraph($nbSentences = 3, $variableNbSentences = true),
        'location' => rand(0,1),
        'range' => $faker -> paragraph($nbSentences = 6, $variableNbSentences = true),
        'offer' => $faker -> paragraph($nbSentences = 6, $variableNbSentences = true),
        'requirements' => $faker -> paragraph($nbSentences = 6, $variableNbSentences = true),
        'priority' =>  Offer::all() -> max('priority')+1??1
    ];
});
