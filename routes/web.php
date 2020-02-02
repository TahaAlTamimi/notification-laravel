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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/payments/create', 'PaymentController@index')->middleware('auth');
Route::post('/payment', 'PaymentController@store')->middleware('auth');
Route::get('/notify', 'NotificationController@show')->middleware('auth');
Route::get('/addcustomer', 'CustomerController@index')->middleware('auth');
Route::post('/addcustomer', 'CustomerController@store')->middleware('auth');
Route::get('/add', 'CustomerController@create')->middleware('auth');
Route::get('/customer/{customer}', 'CustomerController@show')->middleware('auth');
Route::get('/customer/{customer}/edit', 'CustomerController@edit')->middleware('auth');
Route::put('/customer/{customer}', 'CustomerController@update')->middleware('auth');


Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');