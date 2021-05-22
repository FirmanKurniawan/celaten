<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pertanyaan;
use \App\Penilaian;
use \App\RekapNilai;
use \App\Jadwal;
use \App\User;
use Auth;
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
        }elseif(Auth::user()->status == "isi"){
            return redirect('guru')->with('isi', 'Login Successfully!');
        }
        else{
           $user = User::where('id', $guru->user_id)->first();
           return view('guru.penilaian-guru', compact('guru', 'user'));
        }
    }

    public function process_penilaian_guru(Request $request){
    	if($request->pertanyaan1 == "0"){
    		$rekap = new RekapNilai;
            $rekap->userid = Auth::user()->id;
            $rekap->target = $request->target;
            $rekap->pertanyaanid = 0;
            $rekap->bobot = 0;
            // $penilaian->tanggal = Carbon::now()->locale('id')->isoFormat('Do MMMM YYYY');
            $rekap->tanggal = date('Y-m-d');
            $rekap->save();

            $bobot = RekapNilai::where('userid', Auth::user()->id)->where('tanggal', date('Y-m-d'))->sum('bobot');

            $penilaian = new Penilaian;
            $penilaian->userid = Auth::user()->id;
            $penilaian->target = $request->target;
            $penilaian->tanggal = date('Y-m-d');

            $penilaian->bobot = $bobot;
            $penilaian->save();

            $isi = User::find(Auth::user()->id);
            $isi->status_penilaian = "isi";
            $isi->save();
            return redirect('guru/');
    	}elseif($request->pertanyaan1 == "1"){
    		return redirect('guru/penilaian-guru-lanjut');
    	}
    }

    public function lanjut_penilaian_guru(){
        $guru = Jadwal::where('id', 1)->first();
        //cara itung bobot
        // $tes = Penilaian::where('userid', 1)->where('tanggal', '18 Mei 2021')->sum('bobot');
    	$pertanyaan = Pertanyaan::all();
    	return view('guru.penilaian-guru-lanjut', compact('pertanyaan', 'guru'));
    }

    public function process_lanjut_penilaian_guru(Request $request){
    	foreach($request->pertanyaan as $key => $value){

    		$rekap = new RekapNilai;
    		$rekap->userid = Auth::user()->id;
            $rekap->target = $request->target;
    		$rekap->pertanyaanid = $key;
    		
    		$rekap->bobot = $request->pertanyaan[$key];
            $rekap->tanggal = date('Y-m-d');
    		$rekap->save();
    	}
            $bobot = RekapNilai::where('userid', Auth::user()->id)->where('tanggal', date('Y-m-d'))->sum('bobot');

            $penilaian = new Penilaian;
            $penilaian->userid = Auth::user()->id;
            $penilaian->target = $request->target;
            $penilaian->tanggal = date('Y-m-d');

            $penilaian->bobot = $bobot;
            $penilaian->save();
            
            $isi = User::find(Auth::user()->id);
            $isi->status_penilaian = "isi";
            $isi->save();
        return redirect('guru')->with('success', 'Login Successfully!');
    }
}
