<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepsekController extends Controller
{
    public function dashboard(){
    	return view('kepsek.dashboard');
    }

    public function penilaian_guru(){
    	return view('kepsek.penilaian-guru');
    }

    public function penilaian_karyawan(){
    	return view('kepsek.penilaian-karyawan');
    }
}
