<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/group', function () {
    return view('group');
})->name('group');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/sectors', function () {
    return view('sectors');
})->name('sectors');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin/login','Auth\LoginController@showLoginForm') ->name('login');
Route::post('/admin/login','Auth\LoginController@login');
Route::post('/logout','Auth\LoginController@logout') -> name('logout');

Route::resource('/admin/offer','OfferController') -> except('destroy');
Route::delete('/admin/offer/{offer?}','OfferController@destroy') -> name('offer.destroy');
Route::post('/admin/offer/priority','OfferController@updatePriority') -> name('offer.update.priority');
Route::post('/admin/offer/activate/{offer?}','OfferController@updateActive') -> name('offer.update.active');

Route::get('/career','OfferController@career') -> name('career');
Route::get('/career/{offer}','OfferController@careerShow') -> name('career.show');
Route::resource('/cv','CVController');
Route::get('/export/all','CVController@exportAll')->name('cv.export.all');
Route::get('/export/{offer}','CVController@export')->name('cv.export');
Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail') -> name('password.email');
Route::post('/password/reset','Auth\ResetPasswordController@reset') -> name('password.update');
Route::get('/password/reset/{token}','Auth\ResetPasswordController@showResetForm')-> name('password.reset');
Route::resource('admin/user','UserController') -> except('destroy');;
Route::delete('/admin/user/{user?}','UserController@destroy') -> name('user.destroy');


