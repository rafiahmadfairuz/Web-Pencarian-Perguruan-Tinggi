<?php

namespace App\Http\Controllers;

use App\Models\PerguruanTinggi;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $pt = PerguruanTinggi::latest()->paginate(20);
        return view('Member.index', compact('pt'));
    }
    public function detailPt($id)
    {
        $ptTerpilih = PerguruanTinggi::finfORFail($id);
        return view('Member.index', compact('ptTerpilih'));
    }
    public function profile()
    {
        return view('Member.profile');
    }
}
