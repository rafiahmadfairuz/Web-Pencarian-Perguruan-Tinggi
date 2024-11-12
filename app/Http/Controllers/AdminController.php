<?php

namespace App\Http\Controllers;

use App\Models\PerguruanTinggi;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }
    public function viewMember()
    {
        $members = User::where('roles', 'member')->get();
        return view('Admin.member', compact('members'));
    }
    public function viewMahasiswa()
    {
        $mahasiswa = User::with(['perguruanTinggi' => function($query) {
            $query->withPivot('status','fakultas_id','jurusan_id','alamat','nilai_akhir'); // Menambahkan kolom 'status' dari pivot
        }])->get();
        return view('Admin.mahasiswa', compact('mahasiswa'));
    }
    public function perguruanTinggi()
    {
        $perguruanTinggi = PerguruanTinggi::all();
        return view('Admin.PerguruanTinggi.index', compact('perguruanTinggi'));
    }

    public function formPerguruanTinggi()
    {
        return view('Admin.PerguruanTinggi.create');
    }
    public function storePerguruanTinggi(Request $request)
    {
        $request->validate([
             'nama'=> 'required|min:5|max:30|unique:perguruan_tinggis,nama',
             'kategori' => 'required',
             'alamat' => 'required|min:6',
             'telp' => 'numeric|min:12',
             'web' => 'min:5',
             'email' => 'required|email',
             'date' => 'required',
             'biaya' => 'required|min:4|max:232323',
             'icon' => 'required|mimes:jpg,png,jpeg',
             'banner' => 'required||mimes:jpg,png,jpeg',
        ]);

        PerguruanTinggi::create($request->all());
        return redirect()->route('view.pt')->with('sukses');
    }

    public function formUpdatePerguruanTinggi($id)
    {
        $perguruanTinggiTerpilih = PerguruanTinggi::findOrFail($id);
        return view('Admin.PerguruanTinggi.edit', compact('perguruanTinggiTerpilih'));
    }
    public function storeUpdatePerguruanTinggi(Request $request, $id)
    {
        $perguruanTinggiTerpilih = PerguruanTinggi::findOrFail($id);
        return view('Admin.PerguruanTinggi.edit', compact('perguruanTinggiTerpilih'));
    }


    public function fakultas()
    {
        return view('Admin.fakultas');
    }
    public function jurusan()
    {
        return view('Admin.jurusan');
    }

}
