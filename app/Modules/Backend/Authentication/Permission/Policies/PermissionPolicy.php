<?php

namespace App\Modules\Backend\Authentication\Permission\Policies;

use App\Models\Auth\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Checks the user permission to READ permission
     * @param User $user
     * @return bool
     */
    public function read(User $user)
    {
        if($user->can('permissions-read') || $user->can('users-read')) {
            return true;
        }
        return false;
    }


    /**
     * Checks the user permission to CREATE permission
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        if($user->can('permissions-create') || $user->can('users-create')) {
            return true;
        }
        return false;
    }
    /**
     * Checks the user permission to UPDATE permission
     * @param User $user
     * @return bool
     */
    public function update(User $user)
    {
        if($user->can('permissions-update') || $user->can('users-update')) {
            return true;
        }
        return false;
    }

    /**
     * Checks the user permission to DELETE permission
     * @param User $user
     * @return bool
     */
    public function delete(User $user)
    {
        if($user->can('permissions-delete') || $user->can('users-delete')) {
            return true;
        }
        return false;
    }
}
