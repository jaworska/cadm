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

Auth::routes();

Route::get('/auth/home', 'HomeController@index')->name('auth.home');

Route::resource('/auth/offer','OfferController');
Route::post('/auth/offer/priority','OfferController@updatePriority') -> name('offer.update.priority');

Route::get('/career','OfferController@career') -> name('career');
Route::get('/career/{offer}','OfferController@careerShow') -> name('career.show');
Route::resource('/cv','CVController');


