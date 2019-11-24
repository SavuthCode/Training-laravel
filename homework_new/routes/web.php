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
    return view('welcome');
});




// Route::group(['middleware'=>['auth']], function () {
    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/properties','Properties\ProperiesController')->middleware('auth');
    Route::resource('/properties-type','Properties\PropertyTypeController')->middleware('auth');
    Route::resource('/properties-status','Properties\PropertyStatusController')->middleware('auth');
    Route::resource('/properties-price-history','Properties\PropertyPriceHistoryController')->middleware('auth');
    Route::resource('/properties-shape','Properties\ShapesController')->middleware('auth');
    Route::resource('/properties-zone','Properties\ZonesController')->middleware('auth');
// });
