<?php

namespace App\Http\Controllers\Shows;

use App\Models\Show\Show;
use Illuminate\View\View;

class ShowController
{
    public function __invoke(Show $show): View
    {
        $show->load([
            'genres',
            'seasons',
            'watchlists.user',
        ]);

        return view('shows.show', [
            'show' => $show,
        ]);
    }
}
