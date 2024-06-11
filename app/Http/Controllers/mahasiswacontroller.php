<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{
    function index()
    {   
        $mhs = mahasiswaModel ::ordeBy('nim','asc')->get();
        return  view('mahasiswa'compact('mhs'));
    }

    function create()
    {
        return view('create_mahasiswa');
    }
    function store(Request $request)
    {
        $data = [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
        ];
        mahasiswaModel::create($data);
        if ($simpan) {
            echo "Berhasil";
            return redirect()->to('/mahasiswa');
        }
    }
}
