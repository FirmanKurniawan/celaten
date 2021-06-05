<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Katejabatan;
use App\Tampilan;

class MasterController extends Controller
{
	public function index(){
   		return view('master.index');
    }

    public function indexguru(){
        $d['katejabatans'] = Katejabatan::all();
        $d['gurus'] = User::where('role',3)->get();
        return view('master.guru.index', $d);
    }
    public function addguru(){
        $katejabatan = Katejabatan::all();
        return view('master.guru.add');
    }

    public function process_addguru(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->nik = $request->nik;
        $user->nip = $request->nip;
        $user->alamat = $request->alamat;
        $user->notlp = $request->notlp;
        $user->jabatan_id = $request->jabatan_id;
        $user->email = $request->email;
        $user->role = '3';
        $user->password = Bcrypt($request->password);

        if($request->hasFile('foto')){
            $name = $request->file('foto')->getClientOriginalName();
            $request->foto->move(public_path('/foto/guru'), $name);
            $user->foto = $name;
        }

        $user->save();
        return redirect('/master/guru');
    }
    public function editguru($id){
        $d['katejabatans'] = Katejabatan::all();
        $d['gurus'] = User::find($id);
       /* $gurus = User::find($id);*/
        return view('master.guru.edit', $d);
    }
    public function process_editguru(Request $r){
        $d = User::find($r->input('id'));
        $d->name = $r->input("name");
        $d->nik = $r->input("nik");
        $d->nip = $r->input("nip");
        $d->alamat = $r->input("alamat");
        $d->notlp = $r->input("notlp");
        $d->jabatan_id = $r->input("jabatan_id");
        $d->email = $r->input("email");

        if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/guru", $filename);
            $d->foto = $filename;
        }
        $d->save();
        return redirect('/master/guru');
    }
    public function deleteguru($id){
        $guru = User::find($id);
        $guru->delete();
        return redirect(url('/master/guru'));
    }






    public function indexkepsek(){
    	$d['kelapasekolahs'] = User::where('role',2)->get();
        return view('master.kepalasekolah.index', $d);
    }
    public function addkepsek(){
        return view('master.kepalasekolah.add');
    }

    public function process_addkepsek(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->nik = $request->nik;
        $user->nip = $request->nip;
        $user->alamat = $request->alamat;
        $user->notlp = $request->notlp;
        $user->jabatan_id = $request->jabatan_id;
        $user->email = $request->email;
        $user->role = '2';
        $user->password = Bcrypt($request->password);

        if($request->hasFile('foto')){
            $name = $request->file('foto')->getClientOriginalName();
            $request->foto->move(public_path('/foto/kepsek'), $name);
            $user->foto = $name;
        }

        $user->save();
        return redirect('/master/kepalasekolah');
    }
    public function editkepsek($id){
        $kepseks = User::find($id);
        return view('master.kepalasekolah.edit', compact('kepseks'));
    }
    public function process_editkepsek(Request $r){
        $d = User::find($r->input('id'));
        $d->name = $r->input("name");
        $d->nik = $r->input("nik");
        $d->nip = $r->input("nip");
        $d->alamat = $r->input("alamat");
        $d->notlp = $r->input("notlp");
        $d->jabatan_id = $r->input("jabatan_id");
        $d->email = $r->input("email");

        if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/kepsek", $filename);
            $d->foto = $filename;
        }
        $d->save();
        return redirect('/master/kepalasekolah');
    }
    public function deletekepsek($id){
        $kepalasekolah = User::find($id);
        $kepalasekolah->delete();
        return redirect(url('/master/kepalasekolah'));
    }








    public function indexkaryawan(){
        $a['katejabatan'] = Katejabatan::all();
        $a['karyawans'] = User::where('role',4)->get();
        return view('master.karyawan.index', $a);
    }
    public function addkaryawan(){
        return view('master.karyawan.add');
    }

    public function process_addkaryawan(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->nik = $request->nik;
        $user->nip = $request->nip;
        $user->alamat = $request->alamat;
        $user->notlp = $request->notlp;
        $user->jabatan_id = $request->jabatan_id;
        $user->email = $request->email;
        $user->role = '4';
        $user->password = Bcrypt($request->password);

        if($request->hasFile('foto')){
            $name = $request->file('foto')->getClientOriginalName();
            $request->foto->move(public_path('/foto/karyawan'), $name);
            $user->foto = $name;
        }

        $user->save();
        return redirect('/master/karyawan');
    }
    public function editkaryawan($id){
        $d['karyawans'] = User::find($id);
        return view('master.karyawan.edit', $d);
    }
    public function process_editkaryawan(Request $r){
        $d = User::find($r->input('id'));
        $d->name = $r->input("name");
        $d->nik = $r->input("nik");
        $d->nip = $r->input("nip");
        $d->alamat = $r->input("alamat");
        $d->notlp = $r->input("notlp");
        $d->jabatan_id = $r->input("jabatan_id");
        $d->email = $r->input("email");

        if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/karyawan", $filename);
            $d->foto = $filename;
        }
        $d->save();
        return redirect('/master/karyawan');
    }
    public function deletekaryawan($id){
        $karyawan = User::find($id);
        $karyawan->delete();
        return redirect(url('/master/karyawan'));
    }


    public function indextampilan()
    {
        return view('master.tampilandashboard.index');
    }
    public function updatetampilan(Request $r)
    {
        $l = Tampilan::find($r->input('id'));
        $l->deskripsi = $r->input('deskripsi');

        if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/tampilandashboard", $filename);
            $l->foto = $filename;
        }
        $l->save();
        return redirect(url('/master/tampilandashboard'));
    }


}
