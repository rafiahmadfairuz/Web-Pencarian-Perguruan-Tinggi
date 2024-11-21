<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Fakultas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JurusanController extends Controller
{
    public function createJurusan($pt, $id)
    {
        return view('Admin.layout.form.jurusan', compact('id', 'pt'));
    }
    public function storeJurusan(Request $request, $pt, $id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $request->validate([
            'nama' => [
                'required',
                'min:4',
                'max:50',
                Rule::unique('jurusans', 'nama')->where('fakultas_id', $id)
            ]
        ]);
        $fakultas->jurusan()->create([
            'nama' => $request->nama,
        ]);
        return redirect()->route('edit.fakultas', ['pt' => $pt, 'id' => $id])->with('sukses', 'Sukses Membuat Jurusan Baru');
    }

    public function editJurusan($pt, $fakultas, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('Admin.PerguruanTinggi.editJurusan', compact('jurusan', 'fakultas', 'pt'));
    }

    public function storeUpdateJurusan(Request $request, $pt, $fakultas, $id)
    {
        $jurusanTerpilih = Jurusan::findOrFail($id);
        $request->validate([
            'nama' => [
                'required',
                'min:4',
                'max:50',
                Rule::unique('jurusans', 'nama')->where('fakultas_id', $fakultas)
            ]
        ]);
        if ($request->Nama == $jurusanTerpilih->nama) {
            session()->flash('nama', 'Nama Sama, Tidak Terubah');
            return redirect()->back();
        }
        $jurusanTerpilih->update([
            'nama' => $request->nama,
        ]);
        return redirect()->route('edit.fakultas', ['pt' => $pt, 'id' => $fakultas])->with('sukses', 'Sukses Update Jurusan');
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
