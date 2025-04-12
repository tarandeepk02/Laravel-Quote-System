<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::post('/coroplast-sign', [App\Http\Controllers\HomeController::class, 'coroplastSign'])->name('coroplast-sign');
Route::post('/coroplast-signs', [App\Http\Controllers\HomeController::class, 'coroplastSignsStore'])->name('coroplast-signs');
Route::get('/coroplast-signs', [App\Http\Controllers\HomeController::class, 'coroplastSigns'])->name('coroplast-signs');

Route::post('/banner', [App\Http\Controllers\HomeController::class, 'banner'])->name('banner');
Route::post('/banners', [App\Http\Controllers\HomeController::class, 'bannersStore'])->name('banners');
Route::get('/banners', [App\Http\Controllers\HomeController::class, 'banners'])->name('banners');

Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUsStore'])->name('contact-us');

Route::post('/quote', [App\Http\Controllers\HomeController::class, 'quoteStore'])->name('quote');
Route::get('/quote', [App\Http\Controllers\HomeController::class, 'quote'])->name('quote');

Route::get('/success', [App\Http\Controllers\HomeController::class, 'success'])->name('success');


Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});