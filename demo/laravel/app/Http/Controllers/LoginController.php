<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\MessageBag;
use App\Http\Requests;
use Validator;
use Auth;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('login');
    }
    public function postLogin(Request $request){
    	$rules = [
    		'email'     => 'required|email',
    		'password'  => 'required|min:8',
    	];
    	$messages =[
    		'email.required' => 'Yêu cầu nhập Email',
    		'email.email' => 'Email không đúng định dạng',
    		'password.required' => 'Yêu cầu nhập Passwword',
    		'password.min' => 'Password phải có ít nhất 8 ký tự',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);

		if($validator->fails()){
			return redirect()->back()->withErrors($validator);
		}
		else {
			$email = $request->input('email');
			$password = $request->input('password');
			if ( Auth::attempt(['email'=>$email, 'password'=>$password])) {
				return redirect()-> intended('/');
			}
			else{
                $errors = new MessageBag(['errorlogin'=>'Email hoặc Passwword không đúng']);
				return redirect()->back()->withErrors($errors);
			}
		}

    }
}
