<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{

    public function editFakultas($id)
    {
         $fakultasTerpilih = Fakultas::with('jurusan')->findOrFail($id);
         return view('Admin.PerguruanTinggi.editFakultas', compact('fakultasTerpilih'));
    }

    public function storeUpdateFakultas(Request $request, $id)
    {
        $fakultasTerpilih = Fakultas::findOrFail($id);
        $request->validate([
          'nama' => 'required|min:4|max:50|unique:fakultas,nama,' . $fakultasTerpilih->id
        ]);
        if($request->nama == $fakultasTerpilih->nama){
            session()->flash('nama', 'Nama Sama, Tidak Terubah');
            return redirect()->back();
        }
        $fakultasTerpilih->update([
            'nama' => $request->nama,
        ]);
        return redirect()->back()->with('sukses', 'Sukses Update Fakultas');
    }

    public function delete($id)
    {
        $fakultasTerpilih = Fakultas::findOrFail($id);
        $fakultasTerpilih->delete();
        return redirect()->back()->with('sukses', 'Fakultas Berhasil Dihapus');
    }

    public function disable($id)
    {
        $fakultasTerpilih = Fakultas::findOrFail($id);
        $fakultasTerpilih->update([
            'status' => 1
        ]);
        return redirect()->back()->with('sukses', "Sukses Menonaktifkan $fakultasTerpilih->nama");
    }
    public function enable($id)
    {
        $fakultasTerpilih = Fakultas::findOrFail($id);
        $fakultasTerpilih->update([
            'status' => 0
        ]);
        return redirect()->back()->with('sukses', "Sukses Mengaktifkan $fakultasTerpilih->nama");
    }

}
