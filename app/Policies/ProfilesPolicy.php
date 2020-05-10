<?php

namespace App\Policies;

use App\Profiles;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any profiles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the profiles.
     *
     * @param  \App\User  $user
     * @param  \App\Profiles  $profiles
     * @return mixed
     */
    public function view(User $user, Profiles $profiles)
    {
        //
    }

    /**
     * Determine whether the user can create profiles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the profiles.
     *
     * @param  \App\User  $user
     * @param  \App\Profiles  $profiles
     * @return mixed
     */
    public function update(User $user, Profiles $profiles)
    {
        return $user->id == $profiles->user_id;
//        return true;
    }


    /**
     * Determine whether the user can delete the profiles.
     *
     * @param  \App\User  $user
     * @param  \App\Profiles  $profiles
     * @return mixed
     */
    public function delete(User $user, Profiles $profiles)
    {
        //
    }

    /**
     * Determine whether the user can restore the profiles.
     *
     * @param  \App\User  $user
     * @param  \App\Profiles  $profiles
     * @return mixed
     */
    public function restore(User $user, Profiles $profiles)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the profiles.
     *
     * @param  \App\User  $user
     * @param  \App\Profiles  $profiles
     * @return mixed
     */
    public function forceDelete(User $user, Profiles $profiles)
    {
        //
    }
}
