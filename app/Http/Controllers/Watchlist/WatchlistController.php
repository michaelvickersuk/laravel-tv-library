<?php

namespace App\Http\Controllers\Watchlist;

use App\Models\Watchlist\Watchlist;
use Illuminate\View\View;

class WatchlistController
{
    public function __invoke(Watchlist $watchlist): View
    {
        return view('watchlists.watchlist', [
            'watchlist' => $watchlist,
        ]);
    }
}
