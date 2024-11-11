<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\PerguruanTinggi;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $pt = PerguruanTinggi::latest()->paginate(20);
        return view('Member.index', compact('pt'));
    }
    public function detailPt($id)
    {
        $ptTerpilih = PerguruanTinggi::findOrFail($id);
        return view('Member.detail', compact('ptTerpilih'));
    }
    public function profile()
    {
        return view('Member.profile');
    }
    public function formDaftar()
    {
        $dataUser = Auth::user()->id;
        $data = User::findOrFail($dataUser);
        return view('Member.form-pendaftaran', compact('data'));
    }
   
}
