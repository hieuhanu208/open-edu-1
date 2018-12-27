<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function getAdmin(){
        return view('backend.index');
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
