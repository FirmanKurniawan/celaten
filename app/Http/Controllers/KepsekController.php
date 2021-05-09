<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepsekController extends Controller
{
    public function index(){
    	return view('kepsek.kepsek');
    }
}
