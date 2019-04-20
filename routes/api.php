<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['api']], function(){

	Route::post('/auth/signup','AuthController@signup');
	Route::post('/auth/signin','AuthController@signin');
	Route::get('/users','AuthController@index');
	Route::get('/users/{id}','AuthController@show');
	Route::group(['middleware' => ['jwt.auth']], function(){
		Route::get('/profile','AuthController@show');
	});


});

// app todo list
Route::group(['middleware' => ['api']], function(){
	Route::get('/get_todo_list','ConfigController@get_todo_list');

});

