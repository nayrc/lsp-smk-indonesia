<?php

namespace App\Http\Controllers\autentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guru;
use Illuminate\Support\Facades\Hash;

class LoginGuruController extends Controller
{
    public function index()
    {
        return view('auth.loginguru');
    }
    public function login(Request $req)
    {
        // dd($req->all());
        $guru = Guru::where('nip', $req->nip)->first();
        if ($guru) {
            if (Hash::check($req->password, $guru->password)) {
                session(['guru_sukses' => true]);
                return redirect('/guru');
            }
        }
        return redirect('/pageloginguru')->with('message', 'Username atau password salah');
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect('/');
    }
}
