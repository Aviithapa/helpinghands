<?php

Route::group(['namespace' => 'Settings'], function () {

    /**
     * Additional for site settings
     */
    Route::get('/site-settings/update', 'SiteSettingController@getUpdateSiteSettings')->name('dashboard.site-settings.get-update');
    Route::get('/site-settings/images', 'SiteSettingController@getImageSiteSettings')->name('dashboard.site-settings.get-image-update');

    Route::post('/site-settings/update', 'SiteSettingController@updateSiteSettings')->name('dashboard.site-settings.update');

    Route::resource('site-settings', 'SiteSettingController', [
        'except' => ['create', 'store', 'update', 'edit'],
        'names' => [
            'index' => 'dashboard.site-settings.index',
            'create' => 'dashboard.site-settings.create',
            'store' => 'dashboard.site-settings.store',
            'show' => 'dashboard.site-settings.show',
            'update' => 'dashboard.site-settings.update',
            'edit' => 'dashboard.site-settings.edit',
            'destroy' => 'dashboard.site-settings.destroy',
        ]
    ]);




});
