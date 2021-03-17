<?php

namespace App\Http\Controllers\autentikasi;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginAdminController extends Controller
{

    public function index()
    {
        return view('auth.loginadmin');
    }
    public function login(Request $req)
    {
        // dd($req->all());
        $admin = Admin::where('username', $req->username)->first();
        if ($admin) {
            if (Hash::check($req->password, $admin->password)) {
                session(['admin_sukses' => true]);
                return redirect('/admin');
            }
        }
        return redirect('/pageloginadmin')->with('message', 'Username atau password salah');
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        return redirect('/');
    }
}
