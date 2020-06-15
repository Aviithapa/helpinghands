<?php

namespace App\Modules\Backend\Website\Slider\Policies;

use App\Models\Auth\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SliderPolicy
{
    use HandlesAuthorization;

    /**
     * Checks the user permission to READ slider
     * @param User $user
     * @return bool
     */
    public function read(User $user)
    {
        if($user->can('sliders-read')) {
            return true;
        }
        return false;
    }


    /**
     * Checks the user permission to CREATE slider
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        if($user->can('sliders-create')) {
            return true;
        }
        return false;
    }
    /**
     * Checks the user permission to UPDATE slider
     * @param User $user
     * @return bool
     */
    public function update(User $user)
    {
        if($user->can('sliders-update')) {
            return true;
        }
        return false;
    }

    /**
     * Checks the user permission to DELETE slider
     * @param User $user
     * @return bool
     */
    public function delete(User $user)
    {
        if($user->can('sliders-delete')) {
            return true;
        }
        return false;
    }
}
