<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User\User;
use App\Models\Watchlist\Watchlist;
use Faker\Generator as Faker;

$factory->define(Watchlist::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first(),
        'private' => $faker->boolean(),
    ];
});
