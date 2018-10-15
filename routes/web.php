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

Route::get('/new-shipping-order', [
   'uses' => 'OrderController@newOrder',
   'as' => 'new-order'
]);

Route::post('/new-shipping-order', [
    'uses' => 'OrderController@addNewOrder',
    'as' => 'add-order'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
