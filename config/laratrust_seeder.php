<?php

return [
    'role_structure' => [
        'administrator' => [
            'users' => 'c,r,u,d',
            'permissions' => 'c,r,u,d',
            'roles' => 'c,r,u,d',
            'profile' => 'r,u',
            'settings' => 'c,r,u,d',
            'site-settings' => 'c,r,u,d',
            'sliders' => 'c,r,u,d',
            'schools'=>'c,r,u,d',
            'disciplines'=>'c,r,u,d',

        ],
    ],
    'permission_structure' => [

    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
