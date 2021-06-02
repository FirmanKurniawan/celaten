<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pertanyaan;
use \App\PenilaianGuru;
use \App\PenilaianKaryawan;
use \App\User;
use \App\Jadwal;

class KepsekController extends Controller
{
    public function dashboard(){
    	$penilaians = PenilaianGuru::all();
    	return view('kepsek.dashboard', compact('penilaians'));
    }

    public function penilaian_karyawan(){
    	return view('kepsek.penilaian-karyawan');
    }

    public function hasil_nilai($role){
    	$jadwal_guru = Jadwal::where('tipe', "guru")->first();
    	$jadwal_karyawan = Jadwal::where('tipe', "karyawan")->first();
    	$penilaians_guru = PenilaianGuru::all();
    	$penilaians_karyawan = PenilaianKaryawan::all();
    	if($role == "guru"){
    		return view('kepsek.nilai-guru', compact('penilaians_guru', 'jadwal_guru'));
    	}elseif($role == "karyawan"){
    		return view('kepsek.nilai-karyawan', compact('penilaians_karyawan', 'jadwal_karyawan'));
    	}
    }
}
