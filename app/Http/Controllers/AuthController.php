<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function register()
    {
        return view('Auth.register');
    }

    public function storeLogin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);
        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect()->route('home')->with('sukses', 'Berhasil Login. Terimakasih');
        }
        return redirect()->back()->with('gagal', 'Email / Password Salah');
    }

    public function storeRegister(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|min:4',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:4',
            'telepon' => 'required',
            'ttl' => 'required',
        ]);
        if(substr($request->telepon, 0, 1) != 0 ){
            return redirect()->back()->withErrors(['telepon' => 'Nomor Telepon Harus Diawali dengan 0']);
        }
        User::create([
          'name' => $validate['nama'],
          'email' => $validate['email'],
          'password' => $validate['password'],
          'telepon' => $validate['telepon'],
          'ttl' => $validate['ttl'],
        ]);
        return redirect()->route('login')->with('sukses', 'Sukses Mendaftar, Silahkan Login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login')->with('sukses', 'Sukses Logout, Silahkan Login');

    }
}
