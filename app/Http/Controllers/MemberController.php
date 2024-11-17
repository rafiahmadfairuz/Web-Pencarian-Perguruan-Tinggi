<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Fakultas;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Models\PerguruanTinggi;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        if (request('cari')) {
            $pt = PerguruanTinggi::cari(request('cari'))->paginate(20);
        } elseif (request('status')) {
            $pt = PerguruanTinggi::cari(request('cari'))->paginate(20);
        } else {
            $pt = PerguruanTinggi::latest()->paginate(20);
        }
        return view('Member.index', compact('pt'));
    }
    public function detailPt($id)
    {
        $ptTerpilih = PerguruanTinggi::findOrFail($id);
        return view('Member.detail', compact('ptTerpilih'));
    }
    public function profile($id)
    {
        $userPT = User::with(['pt.fakultas', 'pt.jurusan'])->findOrFail($id);
        //   return $userPT->pt->first();
        //   foreach($data->fakultas as $n){
        //     return $n->nama;
        //   };
        //  foreach($userPT->pt as $pt) {
        //  $fakultas = Fakultas::findOrFail($pt->pivot->fakultas_id);
        //  }
        return view('Member.profile', compact('userPT'));
    }
    public function formDaftar($id)
    {
        $data = User::findOrFail(Auth::user()->id);
        $pt = PerguruanTinggi::findOrFail($id);
        $fakultas = Fakultas::where('status', 0)->get();
        $jurusan = Jurusan::where('status', 0)->get();
        return view('Member.form-pendaftaran', compact('data', 'fakultas', 'jurusan', 'pt'));
    }

    public function storeDaftar(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:4',
            'telepon' => 'digits:12|required',
            'email' => 'email|required',
            'ttl' => 'required',
            'alamat' => 'required',
            'nilai_akhir' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
        ]);

        if(substr($request->telepon, 0, 1) != 0 ){
            return redirect()->back()->withErrors(['telepon' => 'Nomor Telepon Harus Diawali dengan 0']);
        }

        $userMendaftar = User::findOrFail($id);
        $userMendaftar->pt()->attach($request->pt, [
            'perguruan_tinggi_id' => $request->pt,
            'alamat' => $request->alamat,
            'nilai_akhir' => $request->nilai_akhir,
            'fakultas_id' => $request->fakultas,
            'jurusan_id' => $request->jurusan,
        ]);
        return redirect()->route('home')->with('sukses', 'Sukses Mendaftar , Hasil Akan Diberitaukan Dari Notifikasi Akun');

    }

}
