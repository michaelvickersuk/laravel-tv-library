<?php

namespace App\Http\Controllers\User;

use App\Models\User\User;
use Illuminate\View\View;

class UserProfileController
{
    public function __invoke(User $user): View
    {
        return view('user.profile', [
            'user' => $user,
        ]);
    }
}
