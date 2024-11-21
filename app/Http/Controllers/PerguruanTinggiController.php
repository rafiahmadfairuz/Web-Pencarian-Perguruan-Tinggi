<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
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

    public function detailPerguruanTinggi($id)
    {
        $perguruanTinggiTerpilih = PerguruanTinggi::findOrFail($id);
        $fakultas = Fakultas::with(['jurusan'])->where('perguruan_tinggi_id', $id)->get();
        return view('Admin.PerguruanTinggi.detail', compact('perguruanTinggiTerpilih', 'fakultas'));
    }

    public function formPerguruanTinggiStep1(Request $request)
    {
        $dataPT = $request->session()->get('dataPT');
        return view('Admin.PerguruanTinggi.create', compact('dataPT'));
    }

    public function storePerguruanTinggiStep1(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required|min:5|max:30|unique:perguruan_tinggis,nama',
            'kategori' => 'required',
            'deskripsi' => 'required|min:20',
            'alamat' => 'required|min:6|max:255',
            'slogan' => 'required|min:10',
            'telp' => 'digits:12',
            'web' => 'min:5|nullable|unique:perguruan_tinggis,web',
            'email' => 'required|email|unique:perguruan_tinggis,email',
            'waktu_pendaftaran_awal' => 'required|date',
            'waktu_pendaftaran_berakhir' => 'required|date',
            'biaya' => 'numeric|required|min:1000',
            'icon' => 'required|mimes:jpg,png,jpeg',
            'banner' => 'required|mimes:jpg,jpeg,png',
        ]);
        if ($request->waktu_pendaftaran_awal > $request->waktu_pendaftaran_berakhir) {
            return redirect()->back()->withErrors(['waktu_pendaftaran_awal' => 'Waktu Pendaftaran Awal Harus Sebelum waktu Pendaftaran Berakhir']);
        }
        if (substr($request->telp, 0, 1) != 0) {
            return redirect()->back()->withErrors(['telp' => 'Nomor Telepon Harus Diawali dengan 0']);
        }
        $icon = $request->file('icon');
        $simpanIcon = $icon->store('image', 'public');
        $validasi['icon'] = $simpanIcon;
        $banner = $request->file('banner');
        $simpanBanner = $banner->store('image', 'public');
        $validasi['banner'] = $simpanBanner;

        // if(empty($request->session()->get('dataPT'))){
        //     $dataPT = new PerguruanTinggi();
        //     $dataPT->fill($validasi);
        //     $request->session()->put('dataPT', $validasi);
        // } else {
        //     $dataPT = $request->session()->get('dataPT');
        //     $dataPT->fill($validasi);
        //     $request->session()->put('dataPT', $validasi);
        // }
        $perguruanTinggiBaru = PerguruanTinggi::create($validasi);
        return redirect()->route('create.pt.2')->with('pt', $perguruanTinggiBaru->id);
    }

    public function formPerguruanTinggiStep2(Request $request)
    {
        // $dataPT = $request->session()->get('dataPT');
        return view('Admin.PerguruanTinggi.create2');
    }

    public function storePerguruanTinggiStep2(Request $request)
    {
        $validasi = $request->validate([
            'pt' => 'required',
            'semuaDataFakultas' => 'required',
        ]);
        $semuaDataFakultas = json_decode($validasi['semuaDataFakultas'], true);
        $pt = PerguruanTinggi::findOrFail($validasi['pt']);
        foreach ($semuaDataFakultas as $fakultas) {
            $pt->fakultas()->create([
                'nama' => $fakultas,
            ]);
        }
        return redirect()->route('admin.detail.pt', $pt->id);
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
            'nama' => 'required|min:5|max:30|unique:perguruan_tinggis,nama,' . $perguruanTinggiTerpilih->id,
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
            'banner' => 'mimes:jpg,jpeg,png'
        ]);

        if ($request->hasFile('icon')) {
            $gambarSaatIni = $perguruanTinggiTerpilih->icon;
            Storage::disk('public')->delete($gambarSaatIni);
            $icon = $request->file('icon');
            $simpan = $icon->store('image', 'public');
            $validasi['icon'] = $simpan;
        }

        if ($request->hasFile('banner')) {
            $gambarSaatIni = $perguruanTinggiTerpilih->banner;
            Storage::disk('public')->delete($gambarSaatIni);
            $banner = $request->file('banner');
            $simpan = $banner->store('image', 'public');
            $validasi['banner'] = $simpan;
        }

        $perguruanTinggiTerpilih->update($validasi);
        return redirect()->route('view.pt')->with('sukses', 'Berhasil Edit Data Baru');
    }

    public function deletePerguruanTinggi($id)
    {
        $pt = PerguruanTinggi::findOrFail($id);
        $pt->delete();
        return redirect()->route('view.pt')->with('sukses', 'Berhasil Menghapus');
    }
}
