<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function jurusan()
    {
        $jurusan = Jurusan::all();
        return view('Admin.jurusan.index', compact('jurusan'));
    }
    public function detailJurusan($id)
    {

    }
    public function storeJurusan(Request $request)
    {
        $request->validate([
          'nama' => 'required|min:4|max:50|unique:jurusans,nama'
        ]);
        Jurusan::create([
            'nama' => $request->nama,
        ]);
        return redirect()->route('view.jurusan')->with('sukses', 'Sukses Membuat Jurusan Baru');
    }

    public function storeUpdateJurusan(Request $request, $id)
    {
        $jurusanTerpilih = Jurusan::findOrFail($id);
         $request->validate([
          'Nama' => 'required|min:4|max:50|unique:jurusans,nama,' . $jurusanTerpilih->id
        ]);
        if($request->Nama == $jurusanTerpilih->nama){
            session()->flash('error', 'Nama Sama, Tidak Terubah');
            return redirect()->back();
        }
        $jurusanTerpilih->update([
            'nama' => $request->Nama,
        ]);
        return redirect()->route('view.jurusan')->with('sukses', 'Sukses Update Jurusan');
    }

    public function deleteJurusan($id)
    {
        $jurusanTerpilih = Jurusan::findOrFail($id);
        $jurusanTerpilih->delete();
        return redirect()->route('view.jurusan')->with('sukses', 'Jurusan Berhasil Dihapus');
    }

    public function disabled($id)
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
