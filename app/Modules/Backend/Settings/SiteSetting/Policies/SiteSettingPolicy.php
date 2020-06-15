<?php

namespace App\Modules\Backend\Settings\Setting\Policies;

use App\Models\Auth\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SiteSettingPolicy
{
    use HandlesAuthorization;

    /**
     * Checks the user permission to READ site settings
     * @param User $user
     * @return bool
     */
    public function read(User $user)
    {
        if($user->can('site-settings-read') || $user->can('settings-read')) {
            return true;
        }
        return false;
    }


    /**
     * Checks the user permission to CREATE site settings
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        if($user->can('site-settings-create') || $user->can('settings-create')) {
            return true;
        }
        return false;
    }
    /**
     * Checks the user permission to UPDATE site settings
     * @param User $user
     * @return bool
     */
    public function update(User $user)
    {
        if($user->can('site-settings-update') || $user->can('settings-update')) {
            return true;
        }
        return false;
    }

    /**
     * Checks the user permission to DELETE site settings
     * @param User $user
     * @return bool
     */
    public function delete(User $user)
    {
        if($user->can('site-settings-delete') || $user->can('settings-delete')) {
            return true;
        }
        return false;
    }
}
