<?php

namespace App\Http\Controllers\Shows;

use App\Models\Show\Episode;
use Illuminate\Http\RedirectResponse;

class ToggleEpisodeWatchedController
{
    public function __invoke(Episode $episode): RedirectResponse
    {
        // todo - Mark Episode as watched/unwatched by the logged in User
        // todo - Update the plays count against the Episode

        return redirect()->back();
    }
}
