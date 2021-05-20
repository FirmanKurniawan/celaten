<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pertanyaan;
use \App\Jadwal;
use \App\Penilaian;
use \App\RekapNilai;
use \App\User;
use Auth;

class KaryawanController extends Controller
{
    public function dashboard(){
    	return view('karyawan.dashboard');
    }

    public function penilaian_karyawan(){
        $karyawan = Jadwal::where('id', 2)->first();
    	if(date('Y-m-d') > $karyawan->tgl_akhir_isi){
            return redirect('karyawan')->with('expired', 'Login Successfully!');
        }elseif(Auth::user()->status == "isi"){
            return redirect('karyawan')->with('isi', 'Login Successfully!');
        }
        else{
           $user = User::where('id', $karyawan->user_id)->first();
           return view('karyawan.penilaian-karyawan', compact('karyawan', 'user'));
        }
    }

    public function process_penilaian_karyawan(Request $request){
    	if($request->pertanyaan1 == "0"){
    		$penilaian = new RekapNilai;
            $penilaian->userid = Auth::user()->id;
            $rekap->target = $request->target;
            $penilaian->pertanyaanid = 0;
            $penilaian->bobot = 0;
            // $penilaian->tanggal = Carbon::now()->locale('id')->isoFormat('Do MMMM YYYY');
            $penilaian->tanggal = date('Y-m-d');
            $penilaian->save();

            $bobot = RekapNilai::where('userid', Auth::user()->id)->where('tanggal', date('Y-m-d'))->sum('bobot');
            
            $penilaian = new Penilaian;
            $penilaian->userid = Auth::user()->id;
            $penilaian->target = $request->target;
            $penilaian->tanggal = date('Y-m-d');

            $penilaian->bobot = $bobot;
            $penilaian->save();

            $isi = User::find(Auth::user()->id);
            $isi->status = "isi";
            $isi->save();

            return redirect('karyawan/');
    	}elseif($request->pertanyaan1 == "1"){
    		return redirect('karyawan/penilaian-karyawan-lanjut');
    	}
    }

    public function lanjut_penilaian_karyawan(){
        $karyawan = Jadwal::where('id', 2)->first();

    	$pertanyaan = Pertanyaan::all();
    	return view('karyawan.penilaian-karyawan-lanjut', compact('pertanyaan', 'karyawan'));
    }

    public function process_lanjut_penilaian_karyawan(Request $request){
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
            $isi->status = "isi";
            $isi->save();
        return redirect('karyawan')->with('success', 'Login Successfully!');
    }
}
