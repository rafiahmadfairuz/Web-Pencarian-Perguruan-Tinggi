<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function fakultas()
    {
        $fakultas = Fakultas::all();
        return view('Admin.Fakultas.index', compact('fakultas'));
    }
    public function detailFakultas($id)
    {
 
    }
    public function storeFakultas(Request $request)
    {
        $request->validate([
          'nama' => 'required|min:4|max:50|unique:fakultas,name'
        ]);
        Fakultas::create([
            'nama' => $request->nama,
        ]);
        return redirect()->route('view.fakultas')->with('sukses', 'Sukses Membuat Fakultas Baru');
    }

    public function storeUpdateFakultas(Request $request, $id)
    {
        $fakultasTerpilih = Fakultas::findOrFail($id);
        $request->validate([
          'Nama' => 'required|min:4|max:50|unique:fakultas,nama,' . $fakultasTerpilih->id
        ]);
        if($request->Nama == $fakultasTerpilih->nama){
            session()->flash('error', 'Nama Sama, Tidak Terubah');
            return redirect()->back();
        }
        $fakultasTerpilih->update([
            'nama' => $request->Nama,
        ]);
        return redirect()->route('view.fakultas')->with('sukses', 'Sukses Update Fakultas');
    }

    public function deleteFakultas($id)
    {
        $fakultasTerpilih = Fakultas::findOrFail($id);
        $fakultasTerpilih->delete();
        return redirect()->route('view.fakultas')->with('sukses', 'Fakultas Berhasil Dihapus');
    }

}
