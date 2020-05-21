<?php

namespace App\Http\Controllers\Shows;

use App\Models\Show\Episode;
use Illuminate\View\View;

class EpisodeController
{
    public function __invoke(Episode $episode): View
    {
        return view('shows.episode', [
            'episode' => $episode,
        ]);
    }
}
