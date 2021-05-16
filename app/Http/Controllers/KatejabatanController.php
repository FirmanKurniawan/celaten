<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Katejabatan;

class KatejabatanController extends Controller
{
    public function index()
    {
    	$katejabatan = \App\Katejabatan::all(); 
    	return view('master.katejabatan.index', compact('katejabatan'));
    }
    public function add(Request $r)
    {
    	$katejabatan = new Katejabatan;
        $katejabatan->nama = $r->nama;
        $katejabatan->role = $r->role;
        $katejabatan->save();
        return redirect('/master/katejabatan');
    }
    public function edit($id){
        $katejabatan = Katejabatan::find($id);
    	return view('master.katejabatan.edit')->with('katejabatan',$katejabatan);
    }
    public function update(Request $r){
        $katejabatan = Katejabatan::find($r->id);
        $katejabatan->nama = $r->nama;
        $katejabatan->role = $r->role;
        $katejabatan->save();
        return redirect('/master/katejabatan');
    }
    public function delete($id)
    {
    	$katejabatan = Katejabatan::find($id);
    	$katejabatan->delete();
    	return redirect(url('/master/katejabatan'));
    }
}
