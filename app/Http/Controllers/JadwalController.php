<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Jadwal;
use DB;

class JadwalController extends Controller
{
    public function index(){
        $jadwals = Jadwal::all();
    	return view('master.jadwal.index', compact('jadwals'));
    }

    public function add_guru(){
    	$users = User::where('role', 3)->get();
    	return view('master.jadwal.add-guru', compact('users'));
    }

    public function add_karyawan(){
    	$users = User::where('role', 4)->get();
    	return view('master.jadwal.add-karyawan', compact('users'));
    }

    public function process_add_guru(Request $request){
        $cek = Jadwal::where('tipe', "guru")->first();
        if($cek){
            $cek->update($request->all());
            DB::table('users')->update(array('status_penilaian' => "Kosong"));    
        }else{
            Jadwal::create($request->all());
        }
    	return redirect('/master/jadwal');
    }

    public function process_add_karyawan(Request $request){
    	$cek = Jadwal::where('tipe', "karyawan")->first();
        if($cek){
            $cek->update($request->all());    
        }else{
            Jadwal::create($request->all());
        }
        return redirect('/master/jadwal');
    }
}
