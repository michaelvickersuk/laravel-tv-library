<?php

use App\Models\Show\Episode;
use App\Models\Show\Season;
use App\Models\Show\Show;
use App\Models\User\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /** @var \Faker\Generator */
    protected $faker;

    public function run()
    {
        $this->faker = Factory::create();

        factory(User::class, 100)->state('mightHaveWatchlist')->create();

        $shows = [
            'Westworld',
            'Game of Thrones',
            'Breaking Bad',
            'The Walking Dead',
            'The Big Bang Theory',
            'The Office (US)',
            'Sherlock',
            'Dexter',
            'Friends',
            'House',
            'The Simpsons',
            'True Detective',
            'Mr. Robot',
            'Prison Break',
            'Rick and Morty',
            'South Park',
            'Futurama',
            'Community',
        ];

        foreach ($shows as $showName) {
            $show = factory(Show::class)->state('mightBeOnAWatchlist')->create(['name' => $showName]);
            $aired = Carbon::instance($this->faker->dateTimeBetween('-3 years', '+3 years'))
                ->setTime(rand(19, 22), 0, 0, 0);
            for ($seasonCount = 1; $seasonCount <= rand(1, 7); $seasonCount++) {
                $season = factory(Season::class)->create([
                    'name' => "Season {$seasonCount}",
                    'show_id' => $show->id,
                ]);
                for ($episodesCount = 1; $episodesCount <= rand(1, 10); $episodesCount++) {
                    factory(Episode::class)->create([
                        'season_id' => $season->id,
                        'aired' => $aired->addWeek(),
                    ]);
                }

                $aired->addYear();
            }
        }
    }
}
