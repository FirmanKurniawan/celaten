<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Jadwal;

class JadwalController extends Controller
{
    public function index(){
    	return view('master.jadwal.index');
    }

    public function add_guru(){
    	$users = User::where('role', 2)->get();
    	return view('master.jadwal.add-guru', compact('users'));
    }

    public function add_karyawan(){
    	$users = User::where('role', 3)->get();
    	return view('master.jadwal.add-karyawan', compact('users'));
    }

    public function process_add_guru(Request $request){
    	Jadwal::create($request->all());
    	return redirect()->back();
    }

    public function process_add_karyawan(Request $request){
    	Jadwal::create($request->all());
    	return redirect()->back();
    }
}
