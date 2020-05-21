<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Show\Season;
use App\Models\Show\Show;
use Faker\Generator as Faker;

$factory->define(Season::class, function (Faker $faker) {
    return [
        'name' => ucwords($faker->words(2, true)),
        'show_id' => Show::inRandomOrder()->first(),
    ];
});
