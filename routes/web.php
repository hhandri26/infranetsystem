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
	// function upload file
	Route::post('/upload_file', 'ConfigController@upload_file')->name('upload_file');
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
	// user Management
	Route::get('/user_table', 'ConfigController@user_table')->name('user_table');
	Route::get('/user_list', 'ConfigController@user_list')->name('user_list');
	Route::get('/user_form', 'ConfigController@user_form')->name('user_form');
	Route::post('/user_add', 'ConfigController@user_add')->name('user_add');
	Route::get('/select_menu', 'ConfigController@select_menu')->name('select_menu');
	Route::get('/user_edit', 'ConfigController@user_edit')->name('user_edit');
	Route::post('/delete_prv', 'ConfigController@delete_prv')->name('delete_prv');

});
// Article
Route::group(['middleware'=>'admin'], function(){
	Route::get('/artikel_table', 'ArticleController@artikel_table')->name('artikel_table');
	Route::get('/artikel_form', 'ArticleController@artikel_form')->name('artikel_form');
	Route::get('/artikel_edit', 'ArticleController@artikel_edit')->name('artikel_edit');
	Route::post('/article_add', 'ArticleController@article_add')->name('article_add');
});
// slide show
Route::group(['middleware'=>'admin'], function(){
	Route::get('/slideshow_table', 'SlideshowController@slideshow_table')->name('slideshow_table');
	Route::get('/slideshow_form', 'SlideshowController@slideshow_form')->name('slideshow_form');
	Route::get('/slideshow_edit', 'SlideshowController@slideshow_edit')->name('slideshow_edit');
	Route::post('/slideshow_add', 'SlideshowController@slideshow_add')->name('slideshow_add');
});
// service 1
Route::group(['middleware'=>'admin'], function(){
	Route::get('/service1_table', 'ServiceController@service1_table')->name('service1_table');
	Route::get('/service1_form', 'ServiceController@service1_form')->name('service1_form');
	Route::get('/service1_edit', 'ServiceController@service1_edit')->name('service1_edit');
	Route::post('/service1_add', 'ServiceController@service1_add')->name('service1_add');
	Route::post('/update_service_h1', 'ServiceController@update_service_h1')->name('update_service_h1');
	
});
// service 2
Route::group(['middleware'=>'admin'], function(){
	Route::get('/service2_table', 'ServiceController@service2_table')->name('service2_table');
	Route::get('/service2_edit', 'ServiceController@service2_edit')->name('service2_edit');
	Route::post('/service2_add', 'ServiceController@service2_add')->name('service2_add');
	
});
// service 3

Route::group(['middleware'=>'admin'], function(){
	Route::get('/service3_table', 'ServiceController@service3_table')->name('service3_table');
	Route::get('/service3_form', 'ServiceController@service3_form')->name('service3_form');
	Route::get('/service3_edit', 'ServiceController@service3_edit')->name('service3_edit');
	Route::post('/service3_add', 'ServiceController@service3_add')->name('service3_add');
	Route::post('/update_service_h3', 'ServiceController@update_service_h3')->name('update_service_h3');
	
});

// service 4
Route::group(['middleware'=>'admin'], function(){
	Route::get('/service4_table', 'ServiceController@service4_table')->name('service4_table');
	Route::get('/service4_edit', 'ServiceController@service4_edit')->name('service4_edit');
	Route::post('/service4_add', 'ServiceController@service4_add')->name('service4_add');
	
});
// about us
Route::group(['middleware'=>'admin'], function(){
	Route::get('/aboutus_table', 'ServiceController@aboutus_table')->name('aboutus_table');
	Route::get('/aboutus_edit', 'ServiceController@aboutus_edit')->name('aboutus_edit');
	Route::post('/aboutus_add', 'ServiceController@aboutus_add')->name('aboutus_add');
	
});
// galery
Route::group(['middleware'=>'admin'], function(){
	Route::get('/gallery_table', 'GalleryController@gallery_table')->name('gallery_table');
	Route::get('/gallery_form', 'GalleryController@gallery_form')->name('gallery_form');
	Route::post('/gallery_add', 'GalleryController@gallery_add')->name('gallery_add');
	Route::get('/gallery_edit', 'GalleryController@gallery_edit')->name('gallery_edit');
	
});

// info
Route::group(['middleware'=>'admin'], function(){
	Route::get('/info_form', 'ConfigController@info_form')->name('info_form');
	Route::post('/info_update', 'ConfigController@info_update')->name('info_update');
	
});

// product

Route::group(['middleware'=>'admin'], function(){
	Route::get('/product_table', 'ProductController@product_table')->name('product_table');
	Route::get('/product_form', 'ProductController@product_form')->name('product_form');
	Route::get('/product_edit', 'ProductController@product_edit')->name('product_edit');
	Route::post('/product_add', 'ProductController@product_add')->name('product_add');
	Route::post('/update_product_h', 'ProductController@update_product_h')->name('update_product_h');
	
});
// home Page

Route::group(['middleware'=>'guest'], function(){
	Route::get('/', 'HomePageController@index')->name('home_page');
	Route::get('/tentang-kami', 'HomePageController@about_us')->name('tentang-kami');
	Route::get('/produk', 'HomePageController@produk')->name('produk');
	Route::get('/pelatihan', 'HomePageController@pelatihan')->name('pelatihan');
	Route::get('/detial-pelatihan', 'HomePageController@detial_pelatihan')->name('detial-pelatihan');
	Route::get('/daftar', 'HomePageController@daftar')->name('daftar');
	Route::get('/artikel', 'HomePageController@artikel')->name('artikel');
	Route::get('/artikel-single/{id}', 'HomePageController@article_single')->name('artikel-single');
	Route::get('/contact-us', 'HomePageController@contact_us')->name('contact-us');
	Route::post('/send_email', 'HomePageController@send_email')->name('send_email');
	Route::resource('/pendaftaran', 'PendaftaranController');

});