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
        // return $mahasiswa;
        return view('Admin.mahasiswa', compact('mahasiswa'));
    }
    public function perguruanTinggi()
    {
        $perguruanTinggi = PerguruanTinggi::all();
        return view('Admin.PerguruanTinggi.index', compact('perguruanTinggi'));
    }
    public function formUpdatePerguruanTinggi($id)
    {
        $perguruanTinggiTerpilih = PerguruanTinggi::findOrFail($id);
        return view('Admin.PerguruanTinggi.edit', compact('perguruanTinggiTerpilih'));
    }
    public function formPerguruanTinggi()
    {
        return view('Admin.PerguruanTinggi.create');
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
