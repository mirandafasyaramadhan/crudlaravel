<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mahasiswa;
use App\dosenwali;
use DB;

class mahasiswaController extends Controller
{
    public function index()
    {
    	$mahasiswa = DB::table('mahasiswa')->join('dosenwali','mahasiswa.id_doswal','=','dosenwali.id_doswal')->get();
    	return view('mahasiswa',compact('mahasiswa'));
    }

    public function tambah()
    {
        $dosenwali = dosenwali::pluck('NamaDosen','id_doswal');
        return view('mahasiswa_tambah',compact('dosenwali'));
    }
    public function store(Request $request)
    {
        mahasiswa::create([
            'Nama' => $request -> Nama,
            'NIM' => $request -> NIM,
            'JenisKelamin' => $request  -> JenisKelamin,
            'id_doswal' => $request  -> province
        ]);
        return redirect ('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = mahasiswa::findOrFail($id);
        $dosenwali = dosenwali::pluck('NamaDosen','id_doswal');
        return view('edit',compact('mahasiswa','dosenwali'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'Nama' => 'required',
            'NIM' => 'required',
            'JenisKelamin'=>'required',
            'province'=>'required'
         ]);

         $mahasiswa = mahasiswa::find($id);
         $mahasiswa->Nama = $request->Nama;
         $mahasiswa->NIM = $request->NIM;
         $mahasiswa->JenisKelamin= $request->JenisKelamin;
         $mahasiswa->id_doswal = $request->province;
         $mahasiswa->save();
         return redirect('/mahasiswa');
    }

  public function hapus($id)
{
    $mahasiswa = mahasiswa::find($id);
    $mahasiswa->delete();
    return redirect()->back();
}
}
