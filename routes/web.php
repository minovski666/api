<?php

use Illuminate\Support\Facades\Route;

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

Route::get('users', 'ApisController@index');
Route::get('users/store', 'ApisController@store');
Route::get('users/{id}', 'ApisController@show');
Route::get('users/edit/{id}', 'ApisController@edit');
Route::get('users/delete/{id}', 'ApisController@destroy');

