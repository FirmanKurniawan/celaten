<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MasterController extends Controller
{
	public function index(){
   		return view('master.index');
    }

    public function indexguru(){
    	return view('master.guru.index');
    }

    public function indexkepsek(){
    	return view('master.kepalasekolah.index');
    }

    public function indexkaryawan(){
    	return view('master.karyawan.index');
    }
}
