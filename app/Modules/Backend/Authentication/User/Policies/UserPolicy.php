<?php

namespace App\Modules\Backend\Authentication\User\Policies;

use App\Models\Auth\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Checks the user permission to READ user
     * @param User $user
     * @return bool
     */
    public function read(User $user)
    {
        if($user->can('users-read')) {
            return true;
        }
        return false;
    }


    /**
     * Checks the user permission to CREATE user
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        if($user->can('users-create')) {
            return true;
        }
        return false;
    }
    /**
     * Checks the user permission to UPDATE user
     * @param User $user
     * @return bool
     */
    public function update(User $user)
    {
        if($user->can('users-update')) {
            return true;
        }
        return false;
    }

    /**
     * Checks the user permission to DELETE user
     * @param User $user
     * @return bool
     */
    public function delete(User $user)
    {
        if($user->can('users-delete')) {
            return true;
        }
        return false;
    }
}
