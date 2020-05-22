<?php

namespace App\Http\Controllers\Shows;

use App\Models\Show\Episode;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ToggleEpisodeWatchedController
{
    public function __invoke(Episode $episode): RedirectResponse
    {
        $episode->userPlays()->toggle([Auth::user()->id]);

        $episode->plays = $episode->userPlays->count();
        $episode->save();

        return redirect()->back();
    }
}
