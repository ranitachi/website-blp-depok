<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Berita;
use App\Model\Kategori;
use Auth;
class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages-backend.berita.index');
    }

    public function beritastatus($id,$st)
    {
        $dt['flag']=$st;
        $edit = Berita::find($id)->update($dt);
        return response()->json($edit);
        // dd($dt);
    }
    public function data($id=-1)
    {
        $data['id']=$id;
        $c=Kategori::all();
        $cat=[];
        foreach($c as $k => $v)
        {
            $cat[$v->id]=$v;
        }
        $data['cat']=$cat;
        $data['data']=Berita::orderBy('created_at','desc')->get();
        return view('pages-backend.berita.data',$data);
    }

    public function show($id=-1)
    {
        $data['id']=$id;
        
        $cat=Kategori::all();
        
        $data['cat']=$cat;
        if($id!=-1)
        {
            $data['det']=Berita::find($id);
        }
        return view('pages-backend.berita.form',$data);
    }

    public function store(Request $request) {
        $create = Berita::create($request->all());
        // return response()->json($create);
        return redirect('berita')->with('pesan', 'Data Berita Berhasil Di Simpan');
    }

    public function update(Request $request, $id)
    {
        $edit = Berita::find($id)->update($request->all());
        // return response()->json($edit);
        return redirect('berita')->with('pesan', 'Data Berita Berhasil Di Edit');
    }

    public function destroy($id) {
        Berita::find($id)->delete();
        return response()->json(['done']);
    }
}
