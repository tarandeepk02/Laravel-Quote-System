<?php

/*Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');*/

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'AdminController@dashboard');
Route::get('/home', 'AdminController@dashboard');
Route::get('/dashboard', 'AdminController@dashboard');



Route::get('profile', 'AdminController@profile')->name('profile');
Route::post('profile', 'AdminController@profile_update')->name('profile.update');

Route::get('password', 'AdminController@password')->name('password');
Route::post('password', 'AdminController@password_update')->name('password.update');

Route::post('ajax/getsubcategories', 'AjaxController@getsubcategories');

Route::resource('category', 'Resource\CategoryResource');
Route::resource('subcategory', 'Resource\SubcategoryResource');
Route::resource('professional', 'Resource\ProfessionalResource');



Route::resource('feedback', 'Resource\FeedbackResource');





 //Route::get('/profile', 'Admin\ProfileController@index');
 //Route::get('/password_change', 'Admin\ProfileController@password_change');
 Route::get('/add_category', 'Admin\CategoriesController@create');
 Route::get('/categories', 'Admin\CategoriesController@index');
 Route::get('/add_subcategory', 'Admin\CategoriesController@create_subcat');
 Route::get('/sub_category', 'Admin\CategoriesController@index_subcat');
 Route::get('/professionals', 'Admin\ProfessionalsController@index');
 Route::get('/add_professionals', 'Admin\ProfessionalsController@create');
 Route::get('/professional_detail', 'Admin\ProfessionalsController@details');
 Route::get('/view_clients', 'Admin\ClientsController@index');
 Route::get('/add_clients', 'Admin\ClientsController@create');
 Route::get('/leads', 'Admin\LeadsController@index');
 Route::get('/lead_reports', 'Admin\LeadsController@leadreports');
 Route::get('/packages', 'Admin\PackagesController@index');
 Route::get('/add_package', 'Admin\PackagesController@create');
 Route::get('/view_payment', 'Admin\PaymentsController@index');
 Route::get('/add_payment', 'Admin\PaymentsController@create');
 Route::get('/history_payment', 'Admin\PaymentsController@payment_history');
 Route::get('/view_pages', 'Admin\SitecontentController@index');
 Route::get('/add_page', 'Admin\SitecontentController@create');
 Route::get('/thank_you', 'Admin\SitecontentController@thankyou');
 Route::get('/view_disclosures', 'Admin\DisclosuresController@index');
 Route::get('/add_disclosures', 'Admin\DisclosuresController@create');
 Route::get('/view_reports', 'Admin\AnalyticsController@index');
 Route::get('/add_reports', 'Admin\AnalyticsController@create');
 Route::get('/view_assistants', 'Admin\SupportTeamController@index');
 Route::get('/add_assistant', 'Admin\SupportTeamController@create');