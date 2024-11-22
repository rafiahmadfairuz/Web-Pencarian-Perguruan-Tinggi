<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use App\Models\PerguruanTinggi;

class AdminController extends Controller
{
    public function index()
    {
        $pendaftar = Pendaftar::all();
        $labels = [];
        $data = [];

        foreach ($pendaftar as $p) {
            $tahun = Carbon::parse($p['created_at'])->translatedFormat('Y');
            $labels[] = $tahun;
            $data[] = $p['total'];
        }
        return view('Admin.index')->with('labels', $labels)->with('data', $data);
    }
    public function viewMember()
    {
        if (request('search')) {
            $members = User::filter(request('search'))->get();
        } elseif (request('status')) {
            $members = User::status(request('status'))->get();
        } else {
            $members = User::where('roles', 'member')->get();
        }
        return view('Admin.member', compact('members'));
    }
    public function viewMahasiswa()
    {
        if (request('search')) {
            $mahasiswa = Pendaftar::filter(request('search'))->with(['perguruanTinggi', 'jurusan', 'fakultas', 'user'])->get();
        } elseif (request('status')) {
            $mahasiswa = Pendaftar::status(request('status'))->with(['perguruanTinggi', 'jurusan', 'fakultas', 'user'])->get();
        } else {
            $mahasiswa = Pendaftar::with(['perguruanTinggi', 'jurusan', 'fakultas', 'user'])->get();
        }
        // echo '<table border="1" cellpadding="5" cellspacing="0">';
        // echo '<tr><th>Mahasiswa</th><th>Universitas</th><th>Juruasn ID</th></tr>'; // Menambahkan header untuk kolom "Juruasn ID"

        // foreach ($mahasiswa as $mb => $uu) {
        //     echo "<tr><td>" . $mb . "</td><td>";
        //     foreach ($uu->pt as $pt) {
        //         echo $pt->pivot->jurusan_id . "<br>"; // Tampilkan juruasn_id yang ada di pivot
        //     }
        //     echo "</td></tr>";
        // }
        // echo '</table>';
        return view('Admin.mahasiswa', compact('mahasiswa'));
    }
    public function mengaktifkan(User $user)
    {
        $user->update([
            'status' => 0,
        ]);
        return redirect()
            ->back()
            ->with('sukses', "Sukses Mengaktifkan Kembali $user->name");
    }
    public function menonaktifkan(User $user)
    {
        $user->update([
            'status' => 1,
        ]);
        return redirect()
            ->back()
            ->with('sukses', "Sukses Menonaktifkan $user->name");
    }

    public function detailPendaftar($id)
    {
        $dataPendaftar = Pendaftar::with(['perguruanTinggi', 'jurusan', 'user', 'fakultas'])->findOrFail($id);
        return view('Admin.PerguruanTinggi.detailPendaftaran', compact('dataPendaftar'));
    }
    public function diterima($id)
    {
        $dataPendaftar = Pendaftar::with(['user'])->findOrFail($id);
        $dataPendaftar->update([
            'status' => 1,
            'deskripsi' => 'Anda Diterima, Silahkan Melakukan Pembayaran Ke Lokasi Perguruan Tinggi Untuk Melanjutkan Administrasi'
        ]);
        return redirect()->route('view.mahasiswa')->with('sukses', 'Sukses Menerima Mahasiswa ' . $dataPendaftar->user->name);
    }
    public function ditolak(Request $request, $id)
    {
        $request->validate([
            'deskripsi' => 'required'
        ]);
        $dataPendaftar = Pendaftar::with(['user'])->findOrFail($id);
        $dataPendaftar->update([
            'status' => 0,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('view.mahasiswa')->with('sukses', 'Sukses Menolak Mahasiswa ' . $dataPendaftar->user->name);
    }
}
