<?php
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
	Route::post('/delete', 'ConfigController@delete')->name('delete');
	// group Menu
	Route::get('/menu_table', 'ConfigController@menu_table')->name('menu_table');
	Route::get('/menu_form', 'ConfigController@menu_form')->name('menu_form');
	Route::post('/menu_add', 'ConfigController@menu_add')->name('menu_add');
	Route::get('/menu_edit', 'ConfigController@menu_edit')->name('menu_edit');
	// sub menu
	Route::get('/sub_menu_table', 'ConfigController@sub_menu_table')->name('sub_menu_table');
	Route::get('/sub_menu_form', 'ConfigController@sub_menu_form')->name('sub_menu_form');
	Route::post('/sub_menu_add', 'ConfigController@sub_menu_add')->name('sub_menu_add');
	Route::get('/sub_menu_edit', 'ConfigController@sub_menu_edit')->name('sub_menu_edit');
});

Route::group(['middleware'=>'admin'], function(){
	// Article
	Route::get('/artikel_table', 'ArticleController@artikel_table')->name('artikel_table');
	Route::get('/artikel_form', 'ArticleController@artikel_form')->name('artikel_form');
});

Route::group(['middleware'=>'guest'], function(){
	Route::get('/', 'HomePageController@index')->name('home_page');
	Route::get('/tentang-kami', 'HomePageController@about_us')->name('tentang-kami');
	Route::get('/produk', 'HomePageController@produk')->name('produk');
	Route::get('/pelatihan', 'HomePageController@pelatihan')->name('pelatihan');
	Route::get('/detial-pelatihan', 'HomePageController@detial_pelatihan')->name('detial-pelatihan');
	Route::get('/daftar', 'HomePageController@daftar')->name('daftar');
	Route::get('/artikel', 'HomePageController@artikel')->name('artikel');
	Route::get('/artikel-single/{id}', 'HomePageController@article_single')->name('artikel-single');
	Route::resource('/pendaftaran', 'PendaftaranController');

});