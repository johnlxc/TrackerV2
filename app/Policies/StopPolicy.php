<?php

namespace App\Policies;

use app\User;
use app\Stop;

use Illuminate\Auth\Access\HandlesAuthorization;

class StopPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function destroy(User $user, Stop $stop)
    {
        return $user->id === $stop->user_id;
    }
}
