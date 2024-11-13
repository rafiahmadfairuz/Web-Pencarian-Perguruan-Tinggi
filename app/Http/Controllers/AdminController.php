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
        if(request('search')){
            $members = User::filter(request('search'))->get();
        } else if(request('status')) {
            $members = User::status(request('status'))->get();
        } else {
            $members = User::where('roles', 'member')->get();
        }
        return view('Admin.member', compact('members'));
    }
    public function viewMahasiswa()
    {
        $mahasiswa = User::with(['perguruanTinggi' => function($query) {
            $query->withPivot('status','fakultas_id','jurusan_id','alamat','nilai_akhir');
        }])->get();
        return view('Admin.mahasiswa', compact('mahasiswa'));
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
