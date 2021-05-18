<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pertanyaan;
use \App\Penilaian;
use \App\Jadwal;
use \App\User;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
	public function dashboard(){
    	return view('guru.dashboard');
    }

    public function penilaian_guru(){
        $guru = Jadwal::where('id', 1)->first();
        if(date('Y-m-d') > $guru->tgl_akhir_isi){
            return redirect('guru')->with('expired', 'Login Successfully!');
        }else{
           $user = User::where('id', $guru->user_id)->first();
           return view('guru.penilaian-guru', compact('guru', 'user'));
        }
    }

    public function process_penilaian_guru(Request $request){
    	if($request->pertanyaan1 == "0"){
    		$penilaian = new Penilaian;
            $penilaian->userid = 1;
            $penilaian->pertanyaanid = 0;
            $penilaian->bobot = 0;
            // $penilaian->tanggal = Carbon::now()->locale('id')->isoFormat('Do MMMM YYYY');
            $penilaian->tanggal = date('Y-m-d');
            $penilaian->save();
            return redirect('guru/');
    	}elseif($request->pertanyaan1 == "1"){
    		return redirect('guru/penilaian-guru-lanjut');
    	}
    }

    public function lanjut_penilaian_guru(){
        //cara itung bobot
        // $tes = Penilaian::where('userid', 1)->where('tanggal', '18 Mei 2021')->sum('bobot');
    	$pertanyaan = Pertanyaan::all();
    	return view('guru.penilaian-guru-lanjut', compact('pertanyaan'));
    }

    public function process_lanjut_penilaian_guru(Request $request){
    	foreach($request->pertanyaan as $key => $value){

    		$penilaian = new Penilaian;
    		$penilaian->userid = 1;
    		$penilaian->pertanyaanid = $key;
    		
    		$penilaian->bobot = $request->pertanyaan[$key];
            // $penilaian->tanggal = Carbon::now()->locale('id')->isoFormat('Do MMMM YYYY');
            $penilaian->tanggal = date('Y-m-d');
    		$penilaian->save();
    	}
        return redirect('guru')->with('success', 'Login Successfully!');
    }
}
