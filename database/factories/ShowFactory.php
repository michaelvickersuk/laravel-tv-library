<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Genre\Genre;
use App\Models\Show\Show;
use App\Models\Watchlist\Watchlist;
use Faker\Generator as Faker;

$factory->define(Show::class, function (Faker $faker) {
    return [
        'name' => ucwords($faker->words(3, true)),
    ];
});

$factory->afterCreating(Show::class, function (Show $show, Faker $faker) {
    $genres = Genre::inRandomOrder()->take(rand(1, 3))->get();
    $show->genres()->sync($genres);
});
$factory->afterCreatingState(Show::class, 'mightBeOnAWatchlist', function (Show $show, Faker $faker) {
    if ($faker->optional()) {
        // add to watchlists
        Watchlist::inRandomOrder()
            ->take(rand(1, 100))
            ->get()
            ->each(function (Watchlist $watchlist) use ($show): void {
                $watchlist->shows()->syncWithoutDetaching($show);
            });
    }
});
