<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\Model;
use Schema;

class MyController extends Controller
{
    public function Hello()
    {
    	return "Chao cac ban !!!";
    }

 	public function Form(Request $request)
 	{
 		$array = $request->all();
 		if($request->input('json') == 'on')
 		{
 			return $array;
 		}
 		else
 		{
 			print_r($array);
 			return 0;
 		}

 	}

 	public function setCookie()
 	{
 		$response = new Response;
 		$response->withCookie('Thanh', 'Handsome', 0.1);
 		return $response;
 	}

 	public function getCookie(Request $request)
 	{
 		return $request->cookie('Thanh');
 	}

 	public function uploadFile(Request $request)
 	{
 		if($request->hasfile('myfile'))
 		{
 			$file = $request->file('myfile');
 			echo "Tải lên thành công <br>";
 			$name = $file->getClientOriginalName('myfile');
 			echo "Tên File: ".$name;
 			$file->move('FileUpload', $name);
 		}
 		else
 		{	
 			echo "Tải lên thất bại";
 		}

 	}

 	## quan ly san pham ##
 	public function Main()
 	{
 		if(!Schema::hasTable('sanpham'))
 		{
 			Schema::create('sanpham', function($table)
 				{
 					$table->increments('id');
 					$table->string('masp', 50);
 					$table->string('tensp', 200);
 					$table->string('loaisp', 100);
 					$table->integer('giasp');
 				});
 		}
 		$data = new \App\sanpham();
 		$data = $data->all()->toArray();
 		return view('sanpham.main', ['data' => $data]);
 	}
 	public function Addform()
 	{
 			return view('sanpham.add');
 	}
 	public function add(Request $request)
 	{
 		$request = $request->all();
 		$sanpham = new \App\sanpham();
 		$sanpham->masp = $request['masp'];
 		$sanpham->tensp = $request['tensp'];
 		$sanpham->loaisp = $request['loaisp'];
 		$sanpham->giasp = $request['giasp'];
 		$sanpham->save();
 		//return redirect()->action('MyController@Main');
 	}
 	public function delete($id)
 	{
 		$data = new \App\sanpham();
 		$data->find($id)->delete();
 		//return redirect()->action('MyController@Main');
 	}
 	public function edit($id)
 	{
 		$data = new \App\sanpham();
 		$data = $data->find($id)->toArray();
 		return view('sanpham.edit', ['data' => $data]);
 	}

 	public function update(Request $request)
 	{
 		$request = $request->all();
 		$data = new \App\sanpham();
 		$data = $data->find($request['id']);
 		$data->masp = $request['suamasp'];
 		$data->tensp = $request['suatensp'];
 		$data->loaisp = $request['sualoaisp'];
 		$data->giasp = $request['suagiasp'];
 		$data->save();
 		//return redirect()->action('MyController@Main');
 	}

}
