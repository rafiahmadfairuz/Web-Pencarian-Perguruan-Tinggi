<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function createJurusan($id)
    {
        return view('Admin.layout.form.jurusan', compact('id'));
    }
    public function storeJurusan(Request $request, $id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $request->validate([
          'nama' => 'required|min:4|max:50|unique:jurusans,nama'
        ]);
        $fakultas->jurusan()->create([
            'nama' => $request->nama,
        ]);
        return redirect()->route('edit.fakultas', $id)->with('sukses', 'Sukses Membuat Jurusan Baru');
    }

    public function editJurusan($fakultas, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('Admin.PerguruanTinggi.editJurusan', compact('jurusan','fakultas'));
    }

    public function storeUpdateJurusan(Request $request, $fakultas, $id)
    {
        $jurusanTerpilih = Jurusan::findOrFail($id);
         $request->validate([
          'nama' => 'required|min:4|max:50|unique:jurusans,nama,' . $jurusanTerpilih->id
        ]);
        if($request->Nama == $jurusanTerpilih->nama){
            session()->flash('nama', 'Nama Sama, Tidak Terubah');
            return redirect()->back();
        }
        $jurusanTerpilih->update([
            'nama' => $request->nama,
        ]);
        return redirect()->route('edit.fakultas', $fakultas)->with('sukses', 'Sukses Update Jurusan');
    }

    public function deleteJurusan($id)
    {
        $jurusanTerpilih = Jurusan::findOrFail($id);
        $jurusanTerpilih->delete();
        return redirect()->back()->with('sukses', 'Jurusan Berhasil Dihapus');
    }

    public function disable($id)
    {
        $jurusanTerpilih = Jurusan::findOrFail($id);
        $jurusanTerpilih->update([
            'status' => 1
        ]);
        return redirect()->back()->with('sukses', "Sukses Menonaktifkan $jurusanTerpilih->nama");
    }
    public function enable($id)
    {
        $jurusanTerpilih = Jurusan::findOrFail($id);
        $jurusanTerpilih->update([
            'status' => 0
        ]);
        return redirect()->back()->with('sukses', "Sukses Mengaktifkan $jurusanTerpilih->nama");
    }
}
