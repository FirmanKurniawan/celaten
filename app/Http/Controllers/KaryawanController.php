<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pertanyaan;
use \App\Penilaian;

class KaryawanController extends Controller
{
    public function dashboard(){
    	return view('karyawan.dashboard');
    }

    public function penilaian_karyawan(){
    	return view('karyawan.penilaian-karyawan');
    }

    public function process_penilaian_karyawan(Request $request){
    	if($request->pertanyaan1 == "0"){
    		return "SKIP";
    	}elseif($request->pertanyaan1 == "1"){
    		return redirect('karyawan/penilaian-karyawan-lanjut');
    	}
    }

    public function lanjut_penilaian_karyawan(){
    	$pertanyaan = Pertanyaan::all();
    	return view('karyawan.penilaian-karyawan-lanjut', compact('pertanyaan'));
    }

    public function process_lanjut_penilaian_karyawan(Request $request){
    	$pertanyaan = Pertanyaan::all();
    	foreach($pertanyaan as $key => $pertanyaans){
    		dd($request->pertanyaan);
    		$penilaian = new Penilaian;
    		$penilaian->userid = 1;
    		$penilaian->pertanyaanid = 1;
    		
    		foreach($request->pertanyaan as $key => $value){
    			$penilaian->bobot = $value;
    			$penilaian->save();
    		}
    	}
    }
}
