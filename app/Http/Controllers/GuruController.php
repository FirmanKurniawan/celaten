<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pertanyaan;
use \App\Penilaian;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
	public function dashboard(){
    	return view('guru.dashboard');
    }

    public function penilaian_guru(){
    	return view('guru.penilaian-guru');
    }

    public function process_penilaian_guru(Request $request){
    	if($request->pertanyaan1 == "0"){
    		return "SKIP";
    	}elseif($request->pertanyaan1 == "1"){
    		return redirect('guru/penilaian-guru-lanjut');
    	}
    }

    public function lanjut_penilaian_guru(){
    	$pertanyaan = Pertanyaan::all();
    	return view('guru.penilaian-guru-lanjut', compact('pertanyaan'));
    }

    public function process_lanjut_penilaian_guru(Request $request){
    	foreach($request->pertanyaan as $key => $value){

    		$penilaian = new Penilaian;
    		$penilaian->userid = 1;
    		$penilaian->pertanyaanid = $key;
    		
    		$penilaian->bobot = $request->pertanyaan[$key];
            $penilaian->tanggal = Carbon::now()->locale('id')->isoFormat('Do MMMM YYYY');
    		$penilaian->save();
    	}
        return redirect('guru')->with('success', 'Login Successfully!');;
    }
}
