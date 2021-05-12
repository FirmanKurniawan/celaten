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
    	$name = $r->name;
    	$password = $r->password;
    	if (Auth::attempt(['email' => $name, 'password' => $password]) || Auth::attempt(['name' => $name, 'password' => $password])){
    		if (Auth::user()->role == "1"){
    			return view('/master/index');
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
