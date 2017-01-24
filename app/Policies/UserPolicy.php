<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use Auth;

class UserPolicy
{
    use HandlesAuthorization;

    public function userProfile(User $user, $profile_user)
    {
        return ($user == $profile_user) || $user->admin;
    }
    public function teamMember(User $user, $teamMember)
    {
        if($user->hasTeam()){
            return ($user->isTeamMember($teamMember->id));
        }
        return false;
    }
}
