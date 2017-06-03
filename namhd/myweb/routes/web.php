<?php


Route::get('/', function () {
    return view('welcome');
	});

// Route::get('csdl',function () { 
//  Schema::create('hocsinh', function($table) { 
//      $table->increments('id'); 
//      $table->string('hoten');
//      $table->string('toan');
//      $table->string('ly'); 
//      $table->string('hoa');

//  }); 
// });



Route::group(['prefix'=>'hocsinh','middleware'=>'AdminLogin'], function() {
     Route::get('danhsach','HocsinhController@getDanhSach');
     Route::get('sua/{id}',['as'=>'hocsinh/getsua','uses'=>'HocsinhController@getSua']);
     Route::post('sua/{id}',['as'=>'postsua','uses'=>'HocsinhController@postSua']);
     Route::get('them',['as'=>'getthem','uses'=>'HocsinhController@getThem']);
     Route::post('them','HocsinhController@postThem');
     Route::get('xoa/{id}',['as'=>'hocsinh/getxoa','uses'=>'HocsinhController@getXoa']);
     });
Route::get('danhsach','HocsinhController@getDanhSach');

Route::get('ds', function() {
    $data=DB::table('hocsinh')->get();
    var_dump($data);
});

Route::get('dang-nhap', 'UserController@getdangnhap' );
Route::post('dang-nhap', 'UserController@postdangnhap' );
Route::get('dangki','UserController@getdangki');
Route::post('dangki','UserController@postdangki');
Route::get('hocsinh/dangxuat',function(){
     Auth::logout();
        return redirect('dang-nhap');
});