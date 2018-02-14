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

// Register the typical authentication routes for an application
// Illuminate/Support/Facades/Auth.php
Auth::routes();

Route::get('/home', 'CustomerController@index');

Route::resource('customers', 'CustomerController');
Route::get('/', function () {
    return redirect()->route('customers.index');
});
