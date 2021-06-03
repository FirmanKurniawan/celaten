<?php

namespace App\Http\Controllers;

use App\Tahunakademik;
use Illuminate\Http\Request;

class TahunakademikController extends Controller
{
    public function index(){
        $d['tahunakademiks'] = Tahunakademik::all();
        return view('master.tahunakademik.index', $d);
    }

    public function process_tahunakademik(Request $request){
        $user = new Tahunakademik;
        $user->name = $request->name;
        $user->keterangan = $request->keterangan;
        $user->save();
        return redirect()->back();      
    }

    public function edittahunakademik($id){
        $d['tahunakademiks'] = Tahunakademik::find($id);
        return view('master.tahunakademik.edit', $d);
    }
    public function update(Request $r){
        $d = Tahunakademik::find($r->input('id'));
        $d->name = $r->input("name");
        $d->keterangan = $r->input("keterangan");
        $d->save();
        return redirect()->back();
    }
    public function deletetahunakademik($id){
        $tahunakademik = Tahunakademik::find($id);
        $tahunakademik->delete();
        return redirect(url('/master/tahunakademik'));
    }
}
