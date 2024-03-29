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

Route::group(['middleware' => 'auth'], function () {

    Route::prefix('transaction')->group(function() {
        Route::get('/', 'TransactionController@index');
        Route::get('incomingWood/excel', 'IncomingWoodController@excel');
        Route::get('incomingWood/getTemplate', 'IncomingWoodController@getTemplate');
        Route::post('incomingWood/getTotal', 'IncomingWoodController@getTotal');
        Route::post('incomingWood/update', 'IncomingWoodController@update')->name('incomingWoods.update');
        Route::resource('incomingWoods', 'IncomingWoodController')->except(['update']);
    });

});