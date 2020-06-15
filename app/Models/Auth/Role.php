<?php

namespace App\Models\Auth;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    protected $fillable = [
        'name',
        'display_name',
        'description',
        'changed_by'
    ];
}
