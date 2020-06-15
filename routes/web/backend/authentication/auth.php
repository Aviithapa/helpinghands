<?php


Route::group(['namespace' => 'Authentication'], function () {

    Route::resource('permissions', 'PermissionController', [
        'names' => [
            'index' => 'dashboard.permissions.index',
            'create' => 'dashboard.permissions.create',
            'store' => 'dashboard.permissions.store',
            'show' => 'dashboard.permissions.show',
            'update' => 'dashboard.permissions.update',
            'edit' => 'dashboard.permissions.edit',
            'destroy' => 'dashboard.permissions.destroy',
        ]
    ]);

    Route::resource('roles', 'RoleController', [
        'names' => [
            'index' => 'dashboard.roles.index',
            'create' => 'dashboard.roles.create',
            'store' => 'dashboard.roles.store',
            'show' => 'dashboard.roles.show',
            'update' => 'dashboard.roles.update',
            'edit' => 'dashboard.roles.edit',
            'destroy' => 'dashboard.roles.destroy',
        ]
    ]);

    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'dashboard.users.index',
            'create' => 'dashboard.users.create',
            'store' => 'dashboard.users.store',
            'show' => 'dashboard.users.show',
            'update' => 'dashboard.users.update',
            'edit' => 'dashboard.users.edit',
            'destroy' => 'dashboard.users.destroy',
        ]
    ]);

    Route::get('profile', 'UserController@getProfile')->name('dashboard.users.profile.get');

    Route::post('profile', 'UserController@postProfile')->name('dashboard.users.profile.post');

    Route::match(['put', 'patch'], 'users/approve/{user}', 'UserController@approve')->name('dashboard.users.approve');

});
