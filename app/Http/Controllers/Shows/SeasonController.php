<?php

namespace App\Http\Controllers\Shows;

use App\Models\Show\Season;
use Illuminate\View\View;

class SeasonController
{
    public function __invoke(Season $season): View
    {
        return view('shows.season', [
            'season' => $season,
        ]);
    }
}
