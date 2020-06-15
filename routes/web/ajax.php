<?php


Route::group(['prefix' => 'dashboard/ajax', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::post('/file-upload/{id?}', 'BaseController@fileUpload')
        ->name('dashboard.ajax.file-upload'); //FOR CREATE
    Route::put('/file-upload/{id?}', 'BaseController@fileUpload')
        ->name('dashboard.ajax.file-upload'); //FOR UPDATE

    Route::post('/any-file-upload/{id?}', 'BaseController@anyFileUpload')
        ->name('dashboard.ajax.any-file-upload'); //FOR CREATE
    Route::put('/any-file-upload/{id?}', 'BaseController@anyFileUpload')
        ->name('dashboard.ajax.any-file-upload'); //FOR UPDATE
});

Route::group(['prefix' => 'web/ajax', 'namespace' => 'Web'], function () {
    Route::post('/file-upload/{id?}', 'BaseController@fileUpload')
        ->name('dashboard.ajax.file-upload'); //FOR CREATE
    Route::put('/file-upload/{id?}', 'BaseController@fileUpload')
        ->name('dashboard.ajax.file-upload'); //FOR UPDATE

    Route::post('/any-file-upload/{id?}', 'BaseController@anyFileUpload')
        ->name('dashboard.ajax.any-file-upload'); //FOR CREATE
    Route::put('/any-file-upload/{id?}', 'BaseController@anyFileUpload')
        ->name('dashboard.ajax.any-file-upload'); //FOR UPDATE
});
