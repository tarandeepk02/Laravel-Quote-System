<?php
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'AdminController@dashboard')->name('index');
Route::get('/home', 'AdminController@dashboard')->name('home');
Route::get('/dashboard', 'AdminController@dashboard');

Route::get('profile', 'AdminController@profile')->name('profile');
Route::post('profile', 'AdminController@profile_update')->name('profile.update');

Route::get('password', 'AdminController@password')->name('password');
Route::post('password', 'AdminController@password_update')->name('password.update');

Route::resource('faq', 'Resource\FaqResource');
Route::resource('feedback', 'Resource\FeedbackResource');
Route::resource('lead', 'Resource\LeadResource');
Route::resource('setting', 'Resource\SettingResource');