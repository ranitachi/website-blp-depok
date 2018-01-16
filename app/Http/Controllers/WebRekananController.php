<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\WebRekanan;

use Session;

class WebRekananController extends Controller
{
    public function index()
    {
        $get = WebRekanan::all();

        return view('pages-backend.web-rekanan.index')->with('data', $get);
    }

    public function create()
    {
        return view('pages-backend.web-rekanan.create');
    }

    public function store(Request $request)
    {
        $set = new WebRekanan;
        $set->nama_web = $request->nama_web;
        $set->image = $request->image;
        $set->url = $request->url;
        $set->save();

        return redirect()->route('webrekanan.index')->with('pesan', 'Berhasil memasukkan data web rekanan baru.');
    }

    public function edit($id)
    {
        $get = WebRekanan::find($id);

        return view('pages-backend.web-rekanan.edit')
            ->with('id', $id)
            ->with('data', $get);
    }

    public function update(Request $request, $id)
    {
        $set = WebRekanan::find($id);
        $set->nama_web = $request->nama_web;
        $set->image = $request->image;
        $set->url = $request->url;
        $set->save();

        return redirect()->route('webrekanan.index')->with('pesan', 'Berhasil mengubah data web rekanan.');
    }
    
    public function destroy($id)
    {
        $set = WebRekanan::find($id);
        $set->delete();
        
        return redirect()->route('webrekanan.index')->with('pesan', 'Berhasil menghapus data web rekanan.');        
    }
}
