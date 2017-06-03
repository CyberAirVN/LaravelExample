<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
// use Auth;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;


class Usercontroller extends Controller
{
    public function getdangnhap()
    {
    	return View('admin.admin.dangnhap');
    }
    public function postdangnhap(Request $request){
     $data = array(
            'email' => $request->email,
            'password' => $request->password);

        if(Auth::attempt($data)){
            return redirect('hocsinh/danhsach');
        }else{
            return redirect('dang-nhap'); 
        }

    }

    public function getdangki()
	{	
		return View('admin.admin.dangki');
	}


	public function postdangki(Request $request)
	{	
		$user = new User;
		$user->username = $request->username;
		
        $user->password = Hash::make($request->password);
		$user->email = $request->email;
		
		$user->save();
		return redirect('dang-nhap');


	}
    public function getdangxuat()
    {
       
        
    }


}
