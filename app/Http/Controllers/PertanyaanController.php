<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index(){
    	return view('master.pertanyaan.index');
    }

    public function process_pertanyaan(Request $request){
		Pertanyaan::create($request->all());
		return redirect()->back();    	
    }
}
