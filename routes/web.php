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
//Guest

Route::get('/', 'Controller@index');
Route::get('/home', function (){
    return redirect('/admin');
});
Auth::routes();

//Category
Route::get('/admin', 'HomeController@index')->name('admin');
Route::post('addCategory', 'CategoryController@add')->name('addCategory');
Route::get('getCategory/{id}', 'CategoryController@get');
Route::post('removeCategory', 'CategoryController@remove')->name('removeCategory');
Route::post('editCategory', 'CategoryController@edit');

//Items
Route::get('admin/item','HomeController@item')->name('admin/item');
Route::post('addItem', 'ItemController@add')->name('addItem');
Route::get('getItem/{id}', 'ItemController@get');
Route::post('removeItem', 'ItemController@remove')->name('removeItem');
Route::post('editItem', 'ItemController@edit');

//Reservation
Route::get('admin/reservation', 'HomeController@reservation')->name('admin/reservation');
Route::post('addCustomer',  'CustomerController@create')->name('addCustomer');
Route::post('editCustomer', 'CustomerController@edit');
Route::post('removeCustomer', 'CustomerController@remove');
Route::post('reserverCustomer', 'CustomerController@reserver');


