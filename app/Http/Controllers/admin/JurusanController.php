<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $data = Jurusan::get();
        return view('admin.jurusan.index', ['data' => $data]);
    }

    public function add(Request $req)
    {
        Jurusan::insert([
            'nama' => $req->nama
        ]);
        return redirect()->route('admin.jurusan')->with('message', 'Data Berhasil Di Tambah');
    }

    public function edit($id)
    {
        $data = Jurusan::find($id);
        return view('admin.jurusan.edit', ['data' => $data]);
    }

    public function update(Request $req, $id)
    {
        // $data = Jurusan::find($id);
        Jurusan::find($id)->update([
            'nama' => $req->nama
        ]);
        return redirect()->route('admin.jurusan')->with('message', 'Data Berhasil Di Sunting');
    }

    public function delete($id)
    {
        Jurusan::find($id)->delete();
        return redirect()->route('admin.jurusan')->with('message', 'Data Berhasil Di Hapus');
    }
}
