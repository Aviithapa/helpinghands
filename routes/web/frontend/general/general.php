<?php

    Route::group(['namespace' => 'General'], function () {
    Route::get('change-password/{code}','HomeController@resetPasswordWithCode')->name('change-password');
    Route::post('change-password','HomeController@resetPasswordStore')->name('change-password.store');
    Route::match(['get', 'post'], '/{slug}', 'HomeController@slug')->where('slug', '.*');


});
