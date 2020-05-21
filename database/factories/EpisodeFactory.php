<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Show\Episode;
use App\Models\Show\Season;
use Faker\Generator as Faker;

$factory->define(Episode::class, function (Faker $faker) {
    return [
        'name' => ucwords($faker->words(3, true)),
        'season_id' => Season::inRandomOrder()->first(),
        'aired' => $faker->dateTimeBetween('-1 year', '+1 year'),
    ];
});
