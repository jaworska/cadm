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

Route::get('/','HomeController@home')->name('home');


Route::get('/group', 'HomeController@group')->name('group');

Route::get('/services', 'HomeController@services')->name('services');

Route::get('/sectors', 'HomeController@sectors')->name('sectors');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/team', 'HomeController@team')->name('team');

Route::get('/application','HomeController@application')->name('application');

Route::get('/career','HomeController@career') -> name('career');
Route::get('/career/{offer}','HomeController@careerShow') -> name('career.show');
Route::post('/career','HomeController@filter');

Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin/login','Auth\LoginController@showLoginForm') ->name('login');
Route::post('/admin/login','Auth\LoginController@login');
Route::post('/logout','Auth\LoginController@logout') -> name('logout');

Route::resource('/admin/offer','OfferController') -> except('destroy');
Route::delete('/admin/offer/{offer?}','OfferController@destroy') -> name('offer.destroy');
Route::post('/admin/offer/priority','OfferController@updatePriority') -> name('offer.update.priority');
Route::post('/admin/offer/activate/{offer?}','OfferController@updateActive') -> name('offer.update.active');


Route::resource('/cv','CVController');
Route::post('/sendCV','CVController@sendMail') -> name('cv.send');
Route::get('/export/all','CVController@exportAll')->name('cv.export.all');
Route::get('/export/{offer}','CVController@export')->name('cv.export');
Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail') -> name('password.email');
Route::post('/password/reset','Auth\ResetPasswordController@reset') -> name('password.update');
Route::get('/password/reset/{token}','Auth\ResetPasswordController@showResetForm')-> name('password.reset');
Route::resource('admin/user','UserController') -> except('destroy');;
Route::delete('/admin/user/{user?}','UserController@destroy') -> name('user.destroy');


