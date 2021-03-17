<?php

namespace App\Http\Controllers\autentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Siswa;
use Illuminate\Support\Facades\Hash;

class LoginSiswaController extends Controller
{
    public function index()
    {
        return view('auth.loginsiswa');
    }
    public function login(Request $req)
    {
        // dd($req->all());
        $siswa = Siswa::where('nis', $req->nis)->first();
        if ($siswa) {
            if (Hash::check($req->password, $siswa->password)) {
                session(['siswa_sukses' => true]);
                return redirect('/siswa');
            }
        }
        return redirect('/pageloginsiswa')->with('message', 'Username atau password salah');
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect('/');
    }
}
