<?php

namespace App\Repositories;

use App\User;
use App\Stop;

class StopRepository
{
    /**
     * Get all of the stops for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Stop::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}
