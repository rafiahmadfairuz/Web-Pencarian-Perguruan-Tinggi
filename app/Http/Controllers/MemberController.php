<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jurusan;
use App\Models\Fakultas;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use App\Models\PerguruanTinggi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class MemberController extends Controller
{
    public function index()
    {
        if (request('cari')) {
            $pt = PerguruanTinggi::cari(request('cari'))->paginate(20);
        }   elseif (request('jurusan') || request('akreditasi') || request('kategori')) {
            $pt = PerguruanTinggi::filter(request(['jurusan', 'akreditasi', 'kategori']))->paginate(20);
        } else {
            $pt = PerguruanTinggi::latest()->paginate(20);
        }
        return view('Member.index', compact('pt'));
    }
    public function detailPt($id)
    {
        $ptTerpilih = PerguruanTinggi::findOrFail($id);
        $fakultas = Fakultas::where('perguruan_tinggi_id', $id)
                   ->where('status', 0)
                   ->with(['jurusan' => function ($query) {
                     $query->where('status', 0);
                   }])
                   ->get();
        return view('Member.detail', compact('ptTerpilih', 'fakultas'));
    }
    public function profile($id)
    {
        $userPT = User::with(['pt.fakultas', 'pt.jurusan'])->findOrFail($id);
        $cek = Gate::inspect('view', $userPT);
        if(!$cek->allowed()){
            session()->flash('message', 'Anda Bukanlah Pemilik Akun ' . $userPT->email);
            abort(403);
        }
        return view('Member.profile', compact('userPT'));
    }
    public function formDaftar($id)
    {
        $tanggalSaatIni = date('Y-m-d');

        $data = User::findOrFail(Auth::user()->id);
        $sudahDaftar = Pendaftar::where('user_id', Auth::user()->id)->get();
        foreach($sudahDaftar as $historyDaftar){
            if($historyDaftar->perguruan_tinggi_id == $id){
                return redirect()->back()->with('sukses', 'Kamu Sudah Pernah Mendaftar di Perguruan Tinggi Ini.');
            }
        }
        $pt = PerguruanTinggi::findOrFail($id);
        if($tanggalSaatIni > $pt->waktu_pendaftaran_berakhir) {
            return redirect()->back()->with('sukses', 'Waktu Pendaftaran Sudah Selesai, Silahkan Coba Lain Kali');
        } else if($tanggalSaatIni < $pt->waktu_pendaftaran_awal) {
            return redirect()->back()->with('sukses', 'Waktu Pendaftaran Belum Dibuka, Silahkan Ditunggu');
        }
        $fakultas = Fakultas::where('status', 0)
        ->where('perguruan_tinggi_id', $id)
        ->get();
        return view('Member.form-pendaftaran', compact('data', 'fakultas', 'pt'));
    }
    public function jurusan($id)
    {
        $jurusan = Jurusan::where('status', 0)
        ->where('fakultas_id', $id)
        ->get();
        return response()->json($jurusan);
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
            'ttl' => $request->ttl,
            'telp' => $request->telepon,
            'alamat' => $request->alamat,
            'nilai_akhir' => $request->nilai_akhir,
            'fakultas_id' => $request->fakultas,
            'jurusan_id' => $request->jurusan,
        ]);
        return redirect()->route('home')->with('sukses', 'Sukses Mendaftar , Hasil Akan Diberitaukan Dari Notifikasi Akun');

    }

    public function detailPendaftaran($id, $notif)
    {

        $notification = Auth::user()->notifications->findOrFail($notif);
        $notification->markAsRead();
        $dataPendaftar = Pendaftar::with(['perguruanTinggi', 'jurusan', 'user', 'fakultas'])->findOrFail($id);
        return view('Member.detailPendaftaran', compact('dataPendaftar'));
    }

}
