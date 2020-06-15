<?php


// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register/success', 'Auth\RegisterController@success')->name('register.success');
$this->get('register/{role}', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register/{role}', 'Auth\RegisterController@registerNew');


// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');


$this->get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
$this->get('auth/callback/{provider}', 'Auth\AuthController@handleProviderCallback');
$this->post('student-signup','Auth\AuthController@studentSignupStore')->name('students-signup.store');
