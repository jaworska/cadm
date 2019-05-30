<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\CV;
use App\Offer;
use Faker\Generator as Faker;

$factory->define(CV::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker -> phoneNumber,
        'file' => 'cv/zaKUWhQMVp2vh8QGPikUHXFn0aQH6mkre0KTMfeE.pdf',
        'term_1' => 1,
        'term_2' => 1,
        'term_3' => rand(0,1),
        'offer_id' => rand(1,Offer::all()->count())

    ];
});
