<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pertanyaan;
use \App\Penilaian;

class KepsekController extends Controller
{
    public function dashboard(){
    	return view('kepsek.dashboard');
    }

    public function penilaian_karyawan(){
    	return view('kepsek.penilaian-karyawan');
    }
}
