<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
       
        $jurusan = Jurusan::all();
    
        return view('jurusan.index', compact('jurusan'));
    }

    public function create()
    {
        return view('jurusan.create');
    }

      public function store(Request $request)
    {

        $this->validate($request, [
            'kode_jurusan'     => 'required|min:2',
            'jurusan'   => 'required|min:5'
        ]);


         Jurusan::create([
            'kode_jurusan'     => $request->kode_jurusan,
            'jurusan'   => $request->jurusan
        ]);

        //redirect to index
        return redirect()->route('jurusan.index');
    }

     public function edit(Jurusan $jurusan)
    {
        return view('jurusan.edit', compact('jurusan'));
    }

     public function update(Request $request, Jurusan $jurusan)
    {
        $this->validate($request, [
            'kode_jurusan'     => 'required|min:2',
            'jurusan'   => 'required|min:5'
        ]);

        $jurusan->update([
            'kode_jurusan'  => $request->kode_jurusan,
            'jurusan'   => $request->jurusan
        ]);

        return redirect()->route('jurusan.index');
    }

     public function destroy(Jurusan $jurusan)
    {
      
        //delete post
        $jurusan->delete();

        //redirect to index
        return redirect()->route('jurusan.index');
    }

    
}
