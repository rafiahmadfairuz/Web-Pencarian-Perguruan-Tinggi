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
        } else if(request('status')){
            $members = User::status(request('status'))->get();
        } else {
            $members = User::where('roles', 'member')->get();
        }
        return view('Admin.member', compact('members'));
    }
    public function mengaktifkan(User $user){
        $user->update([
            'status' => 0
        ]);
        return redirect()->back()->with('sukses', "Sukses Mengaktifkan Kembali $user->name");
    }
    public function menonaktifkan(User $user){
        $user->update([
            'status' => 1
        ]);
        return redirect()->back()->with('sukses', "Sukses Menonaktifkan $user->name");
    }
}
