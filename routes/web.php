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
    return redirect('/home');
});
Auth::routes();

//Category
Route::get('/home', 'HomeController@index')->name('home');
Route::post('addCategory', 'CategoryController@add')->name('addCategory');
Route::get('getCategory/{id}', 'CategoryController@get');
Route::post('removeCategory', 'CategoryController@remove')->name('removeCategory');
Route::post('editCategory', 'CategoryController@edit');

//Items
Route::get('item','HomeController@item')->name('item');
Route::post('addItem', 'ItemController@add')->name('addItem');
Route::get('getItem/{id}', 'ItemController@get');
Route::post('removeItem', 'ItemController@remove')->name('removeItem');
Route::post('editItem', 'ItemController@edit');

//Reservation
Route::get('reservation', 'HomeController@reservation')->name('reservation');
Route::post('addCustomer',  'CustomerController@add')->name('addCustomer');
Route::post('editCustomer', 'CustomerController@edit');
Route::post('removeCustomer', 'CustomerController@remove');
Route::post('reserverCustomer', 'CustomerController@reserver');
