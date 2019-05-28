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

Route::resource('/admin/offer','OfferController');
Route::post('/admin/offer/priority','OfferController@updatePriority') -> name('offer.update.priority');

Route::get('/career','OfferController@career') -> name('career');
Route::get('/career/{offer}','OfferController@careerShow') -> name('career.show');
Route::resource('/cv','CVController');


