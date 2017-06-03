<?php

Route::group(['prefix'=>'admin'],function(){
	Route::get('login',['as'=>'admin/getlogin','uses'=>'mycontroller@getlogin']);
	Route::post('login',['as'=>'admin/postlogin','uses'=>'mycontroller@postlogin']);
	Route::get('register',['as'=>'admin/getregister','uses'=>'mycontroller@getregister']);
	Route::post('register',['as'=>'admin/postregister','uses'=>'mycontroller@postregister']);

});
Route::group(['prefix'=>'sanpham','middleware'=>'adminlogin'],function(){
	Route::get('themsp',['as'=>'sanpham/getthemsp','uses'=>'mycontroller@getthemsp']);
	Route::post('themsp',['as'=>'sanpham/postthemsp','uses'=>'mycontroller@postthemsp']);
	Route::get('xoasp/{id}',['as'=>'sanpham/getxoasp','uses'=>'mycontroller@getxoasp']);
	Route::get('suasp/{id}',['as'=>'sanpham/getsuasp','uses'=>'mycontroller@getsuasp']);
	Route::post('suasp/{id}',['as'=>'sanpham/postsuasp','uses'=>'mycontroller@postsuasp']);
});
Route::get('sanpham/dangxuat',function(){
	Auth::logout();
	return redirect('admin/login');
});

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
