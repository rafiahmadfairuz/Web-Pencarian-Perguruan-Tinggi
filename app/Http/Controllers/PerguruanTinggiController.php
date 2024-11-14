<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerguruanTinggi;
use Illuminate\Support\Facades\Storage;

class PerguruanTinggiController extends Controller
{
    public function perguruanTinggi()
    {
        $perguruanTinggi = PerguruanTinggi::all();
        return view('Admin.PerguruanTinggi.index', compact('perguruanTinggi'));
    }

    public function formPerguruanTinggi()
    {
        return view('Admin.PerguruanTinggi.create');
    }

    public function detailPerguruanTinggi($id)
    {
        $perguruanTinggiTerpilih = PerguruanTinggi::findOrFail($id);
        return view('Admin.PerguruanTinggi.detail', compact('perguruanTinggiTerpilih'));
    }

    public function storePerguruanTinggi(Request $request)
    {
       $validasi = $request->validate([
             'nama'=> 'required|min:5|max:30|unique:perguruan_tinggis,nama',
             'kategori' => 'required',
             'deskripsi' => 'required|min:20',
             'alamat' => 'required|min:6',
             'slogan' => 'required|min:10',
             'telp' => 'digits:12',
             'web' => 'min:5|nullable|unique:perguruan_tinggis,web',
             'email' => 'required|email|unique:perguruan_tinggis,email',
             'waktu_pendaftaran_awal' => 'required|date',
             'waktu_pendaftaran_berakhir' => 'required|date',
             'biaya' => 'numeric|required|min:1000',
             'icon' => 'required|mimes:jpg,png,jpeg',
             'banner' => 'required',
             'banner.*' => 'mimes:jpg,jpeg,png'
        ]);
        if(substr($request->telp, 0, 1) != 0 ){
            return redirect()->back()->withErrors(['telp' => 'Nomor Telepon Harus Diawali dengan 0']);
        }
        $icon = $request->file('icon');
        $simpan = $icon->store('image', 'public');
        $validasi['icon'] = $simpan;

        if($request->hasFile('banner')) {
            $jumlahGambar = count($request->file('banner'));

                foreach($request->file('banner') as $image) {
                    $penyimpananGambar = $image->store('image', 'public');
                    $gambar[] = $penyimpananGambar;
                 }
            
            $semuaGambar = implode(',', $gambar);
         }
        $validasi['banner'] = $semuaGambar;
      PerguruanTinggi::create($validasi);
     return redirect()->route('view.pt')->with('sukses', 'Berhasil Membuat Data Baru');
    }

    public function formUpdatePerguruanTinggi($id)
    {
        $perguruanTinggiTerpilih = PerguruanTinggi::findOrFail($id);
        return view('Admin.PerguruanTinggi.edit', compact('perguruanTinggiTerpilih'));
    }

    public function storeUpdatePerguruanTinggi(Request $request, $id)
    {
        $perguruanTinggiTerpilih = PerguruanTinggi::findOrFail($id);
        $validasi = $request->validate([
            'nama'=> 'required|min:5|max:30|unique:perguruan_tinggis,nama,' . $perguruanTinggiTerpilih->id,
            'kategori' => 'required',
            'deskripsi' => 'required|min:20',
            'alamat' => 'required|min:6',
            'slogan' => 'required|min:10',
            'telp' => 'numeric|digits:12',
            'web' => 'min:5|nullable|unique:perguruan_tinggis,web,' . $perguruanTinggiTerpilih->id,
            'email' => 'required|email|unique:perguruan_tinggis,email,' . $perguruanTinggiTerpilih->id,
            'waktu_pendaftaran_awal' => 'required|date',
            'waktu_pendaftaran_berakhir' => 'required|date',
            'biaya' => 'numeric|required|min:1000',
            'icon' => 'mimes:jpg,png,jpeg',
            'banner.*' => 'mimes:jpg,jpeg,png'
       ]);

       if($request->hasFile('icon')) {
        $gambarSaatIni = $perguruanTinggiTerpilih->icon;
        Storage::disk('public')->delete($gambarSaatIni);
        $icon = $request->file('icon');
        $simpan = $icon->store('image', 'public');
        $validasi['icon'] = $simpan;
       }

       if($request->hasFile('banner')){
        $jumlahGambar = count($request->file('banner'));
        if($jumlahGambar < 6 || $jumlahGambar > 6) {
             return redirect()->back()->with('image', 'Image Harus Berjumlah 6');
        } else {
            $hapusGambar = explode(',', $perguruanTinggiTerpilih->banner);
                foreach($hapusGambar as $g) {
                    Storage::disk('public')->delete($g);
                }
                foreach($request->file('banner') as $image) {
                $penyimpananGambar = $image->store('image', 'public');
                $gambar[] = $penyimpananGambar;
             }
            $semuaGambar = implode(',', $gambar);
        }
        $validasi['banner'] = $semuaGambar;
        }

        $perguruanTinggiTerpilih->update($validasi);
        return redirect()->route('view.pt')->with('sukses', 'Berhasil Edit Data Baru');
    }

}
