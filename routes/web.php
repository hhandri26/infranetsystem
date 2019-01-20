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
    return view('login/form_login');
});
Route::get('/forgot', function () {
    return view('login/forgot_password');
});
Auth::routes();
//metode get 
Route::get('/home', 'HomeController@index')->name('home');
//metode controllers
Route::resource('users', 'UsersController');
//Route::get('users/update','UsersController@update');
