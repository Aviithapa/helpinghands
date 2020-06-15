<?php

namespace App\Modules\Backend\Authentication\Role\Policies;

use App\Models\Auth\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Checks the user permission to READ role
     * @param User $user
     * @return bool
     */
    public function read(User $user)
    {
        if($user->can('roles-read') || $user->can('users-read')) {
            return true;
        }
        return false;
    }


    /**
     * Checks the user permission to CREATE role
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        if($user->can('roles-create') || $user->can('users-create')) {
            return true;
        }
        return false;
    }
    /**
     * Checks the user permission to UPDATE role
     * @param User $user
     * @return bool
     */
    public function update(User $user)
    {
        if($user->can('roles-update') || $user->can('users-update')) {
            return true;
        }
        return false;
    }

    /**
     * Checks the user permission to DELETE role
     * @param User $user
     * @return bool
     */
    public function delete(User $user)
    {
        if($user->can('roles-delete') || $user->can('users-delete')) {
            return true;
        }
        return false;
    }
}
