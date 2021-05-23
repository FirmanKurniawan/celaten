<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('guru.profile');
    }
    public function update(Request $r)
    {
    	$l = User::find($r->input('id'));
    	$l->name = $r->input('name');
        $l->nik = $r->input('nik');
        $l->nip = $r->input('nip');
    	$l->notlp = $r->input('notlp');
        $l->alamat = $r->input('alamat');

    	if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/guru", $filename);
            $l->foto = $filename;
        }
    	$l->save();
    	return redirect(url('/guru/profile'));
    }

    public function index_kepsek()
    {
    	return view('kepsek.profile');
    }
    public function update_kepsek(Request $r)
    {
    	$l = User::find($r->input('id'));
    	$l->name = $r->input('name');
        $l->nik = $r->input('nik');
        $l->nip = $r->input('nip');
    	$l->notlp = $r->input('notlp');
        $l->alamat = $r->input('alamat');

    	if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/kepsek", $filename);
            $l->foto = $filename;
        }
    	$l->save();
    	return redirect(url('/kepsek/profile'));
    }

    public function index_karyawan()
    {
    	return view('karyawan.profile');
    }
    public function update_karyawan(Request $r)
    {
    	$l = User::find($r->input('id'));
    	$l->name = $r->input('name');
        $l->nik = $r->input('nik');
        $l->nip = $r->input('nip');
    	$l->notlp = $r->input('notlp');
        $l->alamat = $r->input('alamat');

    	if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/karyawan", $filename);
            $l->foto = $filename;
        }
    	$l->save();
    	return redirect(url('/karyawan/profile'));
    }
}
