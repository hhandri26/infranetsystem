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


Route::group(['middleware'=>'admin'], function(){
	// Home
	Route::get('/home', 'HomeController@index')->name('home');
	// function delete
	Route::post('/delete_record', 'ConfigController@delete_record')->name('delete_record');
	// group Menu
	Route::get('/menu_table', 'ConfigController@menu_table')->name('menu_table');
	Route::get('/menu_form', 'ConfigController@menu_form')->name('menu_form');
	Route::post('/menu_add', 'ConfigController@menu_add')->name('menu_add');
	Route::post('/menu_edit', 'ConfigController@menu_edit')->name('menu_edit');
	// sub menu
	Route::get('/sub_menu_table', 'ConfigController@sub_menu_table')->name('sub_menu_table');
	Route::post('/sub_menu_add', 'ConfigController@menu_add')->name('sub_menu_add');
	Route::post('/sub_menu_edit', 'ConfigController@menu_edit')->name('sub_menu_edit');
	// role user
	Route::get('/role_table', 'ConfigController@sub_menu_table')->name('role_table');
	Route::post('/role_add', 'ConfigController@menu_add')->name('role_add');
	Route::post('/role_edit', 'ConfigController@menu_edit')->name('role_edit');
	// users
	Route::get('/user_table', 'ConfigController@sub_menu_table')->name('user_table');
	Route::post('/user_add', 'ConfigController@menu_add')->name('user_add');
	Route::post('/user_edit', 'ConfigController@menu_edit')->name('user_edit');


});

Route::group(['middleware'=>'guest'], function(){

	Route::get('/', 'HomePageController@index')->name('home_page');
	Route::get('/tentang-kami', 'HomePageController@about_us')->name('tentang-kami');
	Route::get('/produk', 'HomePageController@produk')->name('produk');
	Route::get('/pelatihan', 'HomePageController@pelatihan')->name('pelatihan');
	Route::get('/detial-pelatihan', 'HomePageController@detial_pelatihan')->name('detial-pelatihan');
	Route::get('/daftar', 'HomePageController@daftar')->name('daftar');
	Route::resource('/pendaftaran', 'PendaftaranController');

});