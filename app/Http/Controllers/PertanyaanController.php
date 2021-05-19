<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index(){
    	$d['pertanyaans'] = Pertanyaan::all();
    	return view('master.pertanyaan.index', $d);
    }

    public function process_pertanyaan(Request $request){
		Pertanyaan::create($request->all());
		return redirect()->back();    	
    }

    public function editpertanyaan($id){
        $d['pertanyaans'] = Pertanyaan::find($id);
        return view('master.pertanyaan.edit', $d);
    }
    public function update(Request $r){
        $d = Pertanyaan::find($r->input('id'));
        $d->pertanyaan = $r->input("pertanyaan");
        $d->save();
        return redirect()->back();
    }
    public function deletepertanyaan($id){
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete();
        return redirect(url('/master/pertanyaan'));
    }
}
