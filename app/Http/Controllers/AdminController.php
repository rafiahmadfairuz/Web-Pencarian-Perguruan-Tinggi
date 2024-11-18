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
        $mahasiswa = User::with(['pt'])->get();
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
}
