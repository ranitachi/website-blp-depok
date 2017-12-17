<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kategori;
use Auth;
class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      return view('pages-backend.kategori.index');
    }

    public function data($id=-1)
    {
        $data['id']=$id;
        $data['cat']=Kategori::all();
        return view('pages-backend.kategori.data',$data);
    }

    public function show($id=-1)
    {
        $data['id']=$id;
        $d=Kategori::find($id);
        $data['det']=$d;
      
        return view('pages-backend.kategori.form',$data);
    }
    public function store(Request $request) {
      $create = Kategori::create($request->all());
      //return response()->json($create);
      return redirect('kategori')->with('pesan', 'Data Kategori Berhasil Di Tambah');
    }

    public function update(Request $request, $id)
    {
        $edit = Kategori::find($id)->update($request->all());
        return redirect('kategori')->with('pesan', 'Data Kategori Berhasil Di Edit');
    }

    public function destroy($id) {
      Kategori::find($id)->delete();
      return response()->json(['done']);
    }
}
