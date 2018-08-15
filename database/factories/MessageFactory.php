<?php

use Faker\Generator as Faker;

$factory->define(\App\Message::class, function (Faker $faker) {

    do {
        $from = rand(1, 16);
        $to = rand(1, 16);
    } while ($from == $to);

    return [
        'from' => $from,
        'to' => $to,
        'text' => $faker->sentence
    ];
});
