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

Route::prefix('orders')->group(function() {
	// Route::resource('/', 'OrdersController');
    Route::get('/', 'OrdersController@index')->name('order.index');
    Route::get('/add','OrdersController@create')->name('order.create');
    Route::post('/post','OrdersController@store')->name('order.store');
    Route::delete('/delete/{id}', 'OrdersController@destroy')->name('order.delete');
    Route::get('loaddata','OrdersController@loaddata')->name('order.loaddata');
    Route::get('/edit/{id}','OrdersController@edit')->name('order.edit');
    Route::put('/update/{id}','OrdersController@update')->name('order.update');
});
