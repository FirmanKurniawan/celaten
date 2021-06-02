<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
class PageController extends Controller
{
    public function login()
	{
		return view('login.login');
	}
    public function proses_login(Request $r){
    	if (Auth::attempt(['email' => $r->email, 'password' => $r->password])){
    		if (Auth::user()->role == "1"){
    			return redirect('/master/');
    		}
            if (Auth::user()->role == "2"){
    			return redirect('/kepsek/');
    		}
    		if (Auth::user()->role == "3"){
                if(Auth::user()->status_penilaian !== "isi"){
    			    return redirect('/guru/')->with('belum-isi', 'Login Successfully!');
                }else{
                    return redirect('/guru/');
                }
    		}
    		if (Auth::user()->role == "4"){
    			if(Auth::user()->status_penilaian !== "isi"){
                    return redirect('/karyawan/')->with('belum-isi', 'Login Successfully!');
                }else{
                    return redirect('/karyawan/');
                }
    		}
            
    	}
    		return redirect('/login')->with('salah', 'Login Successfully!');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
