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

Route::get('hello/{ten}', function($ten){
	return "Xin chao ban ".$ten;
})->where(['ten' => '[a-zA-Z]+']);

Route::get('Welcome', 'MyController@Hello');

Route::get('getForm', function(){
	return view('postForm');
});
Route::post('postForm', ['as' => 'PostForm', 'uses' => 'MyController@Form']);

Route::get('setCookie', 'MyController@setCookie');

Route::get('getCookie', 'MyController@getCookie');

Route::get('uploadFile', function(){
	return view('uploadFile');
});

Route::post('uploadFile', ['as' => 'UploadFile', 'uses' => 'MyController@uploadFile']);

Route::get('database', function()
{
	Schema::create('dulieu', function($table)
	{
		$table->increments('id');
		$table->string('ten', 200);
	});
	echo "Thanh cong";
});

### San Pham ####
Route::group(['prefix' => 'sanpham'], function()
{
	Route::get('', 'MyController@Main');

	Route::get('them', 'MyController@Addform');

	Route::post('them','MyController@add');

	Route::get('/xoa/{id}', 'MyController@delete');

	Route::get('{id}/sua', 'MyController@edit');

	Route::post('update', 'MyController@update');
});
