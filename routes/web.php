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

Route::get('/login', function () {
    return view('login/form_login');
});
Route::get('/forgot', function () {
    return view('login/forgot_password');
});
Auth::routes();
//metode get 
Route::get('/home', 'HomeController@index')->name('home');
//metode controllers
Route::resource('/users', 'UsersController');
Route::resource('/users', 'UsersController');
Route::resource('/pendaftaran', 'Pendaftaran');
//Route::get('users/update','UsersController@update');

Route::resource('level_users', 'LevelusersController');
Route::resource('groupmenu', 'GroupmenuController');
Route::resource('submenu', 'SubmenuController');

// home page
Route::get('/', 'HomePageController@index')->name('home_page');
Route::get('/tentang-kami', 'HomePageController@about_us')->name('tentang-kami');
Route::get('/produk', 'HomePageController@produk')->name('produk');
Route::get('/pelatihan', 'HomePageController@pelatihan')->name('pelatihan');
Route::get('/detial-pelatihan', 'HomePageController@detial_pelatihan')->name('detial-pelatihan');
Route::get('/daftar', 'HomePageController@daftar')->name('daftar');


