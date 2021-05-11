<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MasterController extends Controller
{
	public function index(){
   		return view('master.index');
    }

    public function indexguru(){
    	return view('master.guru.index');
    }
    public function addguru(){
        return view('master.guru.add');
    }

    public function process_addguru(Request $request){
        $id = User::create($request->except('foto', 'password'));
        $user = User::find($id->id);
        $user->password = Bcrypt($request->password);

        if($request->hasFile('foto')){
            $name = $request->file('foto')->getClientOriginalName();
            $request->foto->move(public_path('/foto/guru'), $name);
            $user->foto = $name;
        }

        $user->save();
        return redirect()->back();
    }

    public function indexkepsek(){
    	return view('master.kepalasekolah.index');
    }
    public function addkepsek(){
        return view('master.kepalasekolah.add');
    }

    public function process_addkepsek(Request $request){
        $id = User::create($request->except('foto', 'password'));
        $user = User::find($id->id);
        $user->password = Bcrypt($request->password);

        if($request->hasFile('foto')){
            $name = $request->file('foto')->getClientOriginalName();
            $request->foto->move(public_path('/foto/kepsek'), $name);
            $user->foto = $name;
        }

        $user->save();
        return redirect()->back();
    }

    public function indexkaryawan(){
    	return view('master.karyawan.index');
    }
    public function addkaryawan(){
        return view('master.karyawan.add');
    }

    public function process_addkaryawan(Request $request){
        $id = User::create($request->except('foto', 'password'));
        $user = User::find($id->id);
        $user->password = Bcrypt($request->password);

        if($request->hasFile('foto')){
            $name = $request->file('foto')->getClientOriginalName();
            $request->foto->move(public_path('/foto/karyawan'), $name);
            $user->foto = $name;
        }

        $user->save();
        return redirect()->back();
    }
}
