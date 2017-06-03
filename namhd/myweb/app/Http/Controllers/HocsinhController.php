<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Hocsinh;

use Input;
use Validator;
use DB;
class HocsinhController extends Controller {

	public function getDanhSach()
	{
		$hocsinh=Hocsinh::all();
		
		return view('admin.hocsinh.danhsach',compact('hocsinh'));

		if(Auth::check())
		{
			View()->share('nguoidung',Auth::user());
		}

	}
	public function getThem()
	{	
		return view('admin.hocsinh.them');
	}


	public function postThem(Request $request)
	{	
		

		$v= Validator::make($request->all(),
			[
			'hoten'=>'required',
			'toan'=>'required',
			'ly'=>'required',
			'hoa'=>'required',
			],
			[
			'hoten.required' => 'Ban chua nhap ho ten',
			'toan.required'  => 'Ban chua nhap diem',
			'ly.required'    => 'Ban chua nhap diem',
			'hoa.required'   => 'Ban chua nhap diem'
			]
			);
		if($v->fails()){
			return redirect()->back();
		}
		$hocsinh = new HocSinh;
		$hocsinh->hoten = $request->hoten;
		$hocsinh->toan = $request->toan;
		$hocsinh->ly = $request->ly;
		$hocsinh->hoa = $request->hoa;
		$hocsinh->save();
		return redirect('hocsinh/danhsach');
	}



	public function getSua($id)
	{
		 $hocsinh = Hocsinh::find($id);
        return view('admin.hocsinh.sua',['hocsinh'=>$hocsinh]);
	}


	public function postSua($id,Request $request)
	{
		
		$hocsinh = HocSinh::find($id);
		$hocsinh->hoten = $request->hoten;
		$hocsinh->toan = $request->toan;
		$hocsinh->ly = $request->ly;
		$hocsinh->hoa = $request->hoa;
		$hocsinh->save();
		return redirect('hocsinh/danhsach');
	}

	
	public function getXoa($id)
	{
		$hocsinh = hocsinh::find($id);

		$hocsinh->delete();
		return redirect('hocsinh/danhsach');
	}



	
	
}
