<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class PageController extends Controller
{
    public function login()
	{
		return view('login.login');
	}
    public function proses_login(Request $r){
    	if (Auth::attempt(['email' => $r->email, 'password' => $r->password])){
    		if (Auth::user()->role == "1"){
    			return redirect('/kepalasekolah/index');
    		}
            if (Auth::user()->role == "2"){
    			return view('/kepsek/index');
    		}
    		if (Auth::user()->role == "3"){
    			return view('/guru/index');
    		}
    		if (Auth::user()->role == "4"){
    			return view('/karyawan/index');
    		}
            
    	}
    		return redirect('/not_found/404.jpg');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
