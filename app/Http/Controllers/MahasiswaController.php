<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
       
        $mahasiswa = Mahasiswa::all();
    
        return view('mahasiswa.index', compact('mahasiswa'));
    }

     public function create()
    {
        $jurusan = Jurusan::all();
    
        return view('mahasiswa.create', compact('jurusan'));
    }

      public function store(Request $request)
    {
         Mahasiswa::create([
            'nim'     => $request->nim,
            'nama_lengkap'   => $request->nama_lengkap,
            'jurusan_id'   => $request->jurusan,
            'tempat_lahir'   => $request->tempat_lahir,
            'tanggal_lahir'   => $request->tanggal_lahir,
            'alamat_lengkap'   => $request->alamat_lengkap,
        ]);

        //redirect to index
        return redirect()->route('mahasiswa.index');
    }
}
