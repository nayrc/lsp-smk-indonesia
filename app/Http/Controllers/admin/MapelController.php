<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $data = Mapel::get();
        return view('admin.mapel.index', ['data' => $data]);
    }

    public function add(Request $req)
    {
        Mapel::insert([
            'nama' => $req->nama
        ]);
        return redirect()->route('admin.mapel')->with('message', 'Data Berhasil Di Tambah');
    }

    public function edit($id)
    {
        $data = Mapel::find($id);
        return view('admin.mapel.edit', ['data' => $data]);
    }

    public function update(Request $req, $id)
    {
        Mapel::find($id)->update([
            'nama' => $req->nama
        ]);
        return redirect()->route('admin.mapel')->with('message', 'Data Berhasil Di Sunting');
    }

    public function delete($id)
    {
        Mapel::find($id)->delete();
        return redirect()->route('admin.mapel')->with('message', 'Data Berhasil Di Hapus');
    }
}
