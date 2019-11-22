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

Route::prefix('test_laravel')->group(function () {
    Route::resource('products','TrainProductsController');
    Route::resource('products_categories','TrainProductCategoryController');
    Route::resource('products_history','TrainProductHistoryController');
    Route::resource('products_status','TrainProductStatusController');
});
