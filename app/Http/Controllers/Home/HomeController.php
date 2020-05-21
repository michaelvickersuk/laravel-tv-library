<?php

namespace App\Http\Controllers\Home;

use App\Models\Show\Episode;
use Illuminate\View\View;

class HomeController
{
    public function __invoke(): View
    {
        $mostWatchedEpisodes = Episode::take(10)
            ->get();

        return view('home', [
            'mostWatchedEpisodes' => $mostWatchedEpisodes,
        ]);
    }
}
