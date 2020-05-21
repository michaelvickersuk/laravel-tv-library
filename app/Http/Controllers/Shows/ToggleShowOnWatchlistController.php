<?php

namespace App\Http\Controllers\Shows;

use App\Models\Show\Show;
use Illuminate\Http\RedirectResponse;

class ToggleShowOnWatchlistController
{
    public function __invoke(Show $show): RedirectResponse
    {
        // todo - Create a Watchlist if the User doesn't have one
        // todo - Add/Remove Show to/from logged in Users Watchlist

        return redirect()->back();
    }
}
