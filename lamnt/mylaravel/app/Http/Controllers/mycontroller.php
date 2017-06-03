<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\SanPham;
use App\User;
use Validator;
use App\Http\Requests\CateRequest;
class mycontroller extends Controller
{
    function __construct()
    {
        if(Auth::check())
        {
            view()->share('nguoidung',Auth::user());
        }
    }
	public function postsuasp(Request $request,$id)
	{
		$v= Validator::make($request->all(),
            [
                'masp'=>'required',
                'tensp'=>'required',
                'soluongsp'=>'required|numeric',

            ],
            [
                'masp.required'=>"Nhập mã sản phẩm",
                'tensp.required'=>"Nhập tên sản phẩm",
                'soluongsp.required'=>"Nhập số lượng sản phẩm",
            
                'soluongsp.numeric'=>"Sô Lượng sản phẩm nhập bằng số",
            ]
            );
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }

        
        $sanpham = SanPham::find($id);
        $sanpham->ma_sp = $request->masp;
        $sanpham->ten_sp = $request->tensp;
        $sanpham->mo_ta_sp = $request->motasp;
        $sanpham->so_luong_sp = $request->soluongsp;
         if($request->hasFile('hinh'))
        {
            $file=$request->file('hinh');
            $duoi=$file->getClientOriginalExtension();
            if($duoi !='jpg' && $duoi !='png'){
                return redirect('sanpham/themsp')->with(['flash_color'=>'danger','flash_message'=>'Bạn chỉ chọn file có đuôi là jpg hoặc png']);

            }
            $name=$file->getClientOriginalName();
            $hinh = str_random(4)."_".$name;
            while(file_exists("upload/".$hinh))
            {
                $hinh = str_random(4)."_".$name;
            }
            $file->move("upload",$hinh);
            $sanpham->hinh_sp = $hinh;
        }
        else
        {
            $sanpham->hinh_sp = '';
        }
        
        $sanpham->save();
        return redirect('sanpham/themsp')->with(['flash_color'=>'success','flash_message'=>'Đã Sửa Thành Công Sản Phẩm']);;
	}
	public function getsuasp($id)
	{
		 $sanpham = SanPham::find($id)->toArray();
		$data=SanPham::select('id','ma_sp','ten_sp','mo_ta_sp','so_luong_sp','hinh_sp')->orderBy('id','DESC')->get();
		return view('suasp',compact('id','data','sanpham'));
	}
	public function getxoasp($id)
	{
        $sanpham = SanPham::find($id);
        $sanpham->delete($id);
        return redirect('sanpham/themsp')->with(['flash_color'=>'danger','flash_message'=>'Đã Xóa Sản Phẩm']);
	}
	public function postthemsp(Request $request)
	 {
		$v= Validator::make($request->all(),
    		[
    			'masp'=>'required',
    			'tensp'=>'required|unique:sanpham,ten_sp',
    			'soluongsp'=>'required|numeric',

    		],
    		[
    			'masp.required'=>"Nhập mã sản phẩm",
    			'tensp.required'=>"Nhập tên sản phẩm",
    			'soluongsp.required'=>"Nhập số lượng sản phẩm",
    			'tensp.unique'=>"Sản phẩm đã tồn tại!",
    			'soluongsp.numeric'=>"Sô Lượng sản phẩm nhập bằng số",
    		]
    		);
    	if($v->fails()){
    		return redirect()->back()->withErrors($v->errors());
    	}
    	$sanpham = new SanPham;
    	$sanpham->ma_sp = $request->masp;
    	$sanpham->ten_sp = $request->masp;
    	$sanpham->mo_ta_sp = $request->motasp;
    	$sanpham->so_luong_sp = $request->soluongsp;
         if($request->hasFile('hinh'))
        {
            $file=$request->file('hinh');
            $duoi=$file->getClientOriginalExtension();
            if($duoi !='jpg' && $duoi !='png'){
                return redirect('sanpham/themsp')->with(['flash_color'=>'danger','flash_message'=>'Bạn chỉ chọn file có đuôi là jpg hoặc png']);

            }
            $name=$file->getClientOriginalName();
            $hinh = str_random(4)."_".$name;
            while(file_exists("upload/".$hinh))
            {
                $hinh = str_random(4)."_".$name;
            }
            $file->move("upload",$hinh);
            $sanpham->hinh_sp = $hinh;
        }
        else
        {
            $sanpham->hinh_sp = '';
        }
    	
    	$sanpham->save();
        return redirect('sanpham/themsp')->with(['flash_color'=>'success','flash_message'=>'Đã Thêm Sản Phẩm Thành Công']);
	}
	public function getthemsp()
	{
		$data=SanPham::select('id','ma_sp','ten_sp','mo_ta_sp','so_luong_sp','hinh_sp')->orderBy('id','DESC')->get();
		return view('themsp',compact('data'));
	}
	public function postregister(Request $request)
	{
		$val=Validator::make($request->all(),
		[
			'name'=>'required|unique:users,name',
			'password'=>'required|min:6|max:32',
			're_password'=>'required|same:password',
			'email'=>'required|email'
		],
		[
			'name.required'=>'Nhập Tên Tài Khoản',
			'name.unique'=>'Tài Khoản Đã TồnTại',
			'password.required'=>'Nhập Mật khẩu',
			'password.min'=>'Mật Khẩu Ít Nhất 6 Ký Tự',
			'password.max'=>'Mật Khẩu Nhiều Nhất 32 Ký Tự',
			're_password.required'=>'Nhập Lại Mật Khẩu',
			're_password.same'=>'Mật Khẩu Nhập Lại Không Đúng',
			'email.required'=>'Nhập Email',
			'email.email'=>'Email Không Đúng Định Dạng'
		]
		);
		if($val->fails()){
			return redirect()->back()->withErrors($val->errors());
		}
		$user = new User;
		$user->name=$request->name;
		$user->email=$request->email;
		$user->password=bcrypt($request->password);
		$user->save();
		return redirect('admin/login')->with(['flash_color'=>'success','flash_message'=>'Đã Đăng ký Thành Công! Vui Lòng Đăng Nhập']);
	}
    public function getregister()
    {
        return view('register');
    }
    public function postlogin(Request $request)
    {
         $v= Validator::make($request->all(),
            [
                'name'=>'required',
                'password'=>'required',
                
            ],
            [
                'name.required'=>"Nhập username",
                
             
                'password.required'=>"Nhập password",
               
            ]
            );
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }
        $name=$request->name;
        $password=$request->password;
        if (Auth::attempt(['name' => $name, 'password' => $password])) {
            // Authentication passed...
             return redirect()->intended('sanpham/themsp');
            
        }
        else{
        	return redirect()->back()->with(['flash_color'=>'danger','flash_message'=>'Tài Khoản Hoặc Mật Khẩu Không Đúng']);
        }
    }
    public function getlogin()
    {
    	return view('login');
    }
}

