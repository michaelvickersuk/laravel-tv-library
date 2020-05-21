<?php

namespace App\Http\Controllers\Watchlist;

use App\Models\Watchlist\Watchlist;
use Illuminate\Http\RedirectResponse;

class ChangeWatchlistVisibilityController
{
    public function __invoke(Watchlist $watchlist): RedirectResponse
    {
        // todo - Update the watchlist visibility

        return redirect()->back();
    }
}
