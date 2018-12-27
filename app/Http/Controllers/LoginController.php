<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

use Auth;
class LoginController extends Controller
{
    public function getLogin(){
        return view('backend.login');
    }

    public function postLogin(LoginRequest $request){
       $arr = ['email' =>$request->email, 'password' => $request->password];
        if($request->remember = 'Remember Me'){
            $remember = true;
        }else {
            $remember = false;
        }

        if(Auth::attempt($arr,$remember)){
           return redirect()->route('dashboard');
        }else{
           return redirect()->route('login')->with('error','Tài khoản hoặc mật khẩu không đúng!!!');
        }
    }
}
