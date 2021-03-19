<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Kelas;
use App\Jurusan;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data = Kelas::get();
        $jurusan = Jurusan::get();
        return view('admin.kelas.index', ['data' => $data], compact('jurusan'));
    }

    public function add(Request $req)
    {
        Kelas::insert([
            'nama' => $req->nama,
            'id_jurusan' => $req->id_jurusan
        ]);
        return redirect()->route('admin.kelas')->with('message', 'Data Berhasil Di Tambah');
    }

    public function edit($id)
    {
        $data = Kelas::find($id);
        $jurusan = Jurusan::get();
        return view('admin.kelas.edit', ['data' => $data], compact('jurusan'));
    }

    public function update(Request $req, $id)
    {
        Kelas::find($id)->update([
            'nama' => $req->nama,
            'id_jurusan' => $req->id_jurusan
        ]);
        return redirect()->route('admin.kelas')->with('message', 'Data Berhasil Di Sunting');
    }

    public function delete($id)
    {
        Kelas::find($id)->delete();
        return redirect()->route('admin.kelas')->with('message', 'Data Berhasil Di Hapus');
    }
}
