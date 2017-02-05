<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use Auth;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Check if user viewing their profile or is admin.
     *
     * @param User $user
     * @param $profile_user
     * @return bool
     */
    public function userProfile(User $user, $profile_user)
    {
        return ($user == $profile_user) || $user->admin;
    }

    /**
     * Check if user's team member.
     *
     * @param User $user
     * @param $teamMember
     * @return bool
     */
    public function teamMember(User $user, $teamMember)
    {
        if($user->hasTeam()){
            return ($user->isTeamMember($teamMember->id));
        }
        return false;
    }

}
