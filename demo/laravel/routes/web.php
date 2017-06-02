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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

Route::get('','HomeController@getIndex');
Route::get('logout','HomeController@getLogout');


Route::get('facebook/redirect', 'Auth\SocialController@redirectToProvider');
Route::get('facebook/callback', 'Auth\SocialController@handleProviderCallback');



Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'cate'],function(){
		Route::get('list',['as'=>'admin.cate.list','uses'=>'cateController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'cateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'cateController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'cateController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'cateController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'cateController@postEdit']);
	});
});