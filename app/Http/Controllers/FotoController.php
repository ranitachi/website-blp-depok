<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Foto;
class FotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kat=$data=array();
        $d=Foto::orderBy('title')->get();
        foreach($d as $k=>$v)
        {
            $kat[$v->category]=$v;
            $data[$v->category][]=$v;
        }
        return view('pages-backend.foto.index')
                    ->with('kat',$kat)
                    ->with('data',$data);
    }
    public function data($id=-1)
    {
        $data['id']=$id;
        $data['data']=Foto::orderBy('title')->get();
        return view('pages-backend.foto.data',$data);
    }

    public function show($id=-1)
    {
        $data['id']=$id;
        if($id!=-1)
        {
        $data['det']=Foto::find($id);
        }
        return view('pages-backend.foto.form',$data);
    }

    public function store(Request $request) {
        $create = Foto::create($request->all());
        //return response()->json($create);
        return redirect('foto')->with('pesan', 'Dokumentasi Foto Berhasil Di Simpan');
    }

    public function update(Request $request, $id)
    {
        $edit = Foto::find($id)->update($request->all());
         return redirect('foto')->with('pesan', 'Dokumentasi Foto Berhasil Di Edit');
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        //return response()->json($edit);
    }

    public function destroy($id) {
        Foto::find($id)->delete();
        return response()->json(['done']);
    }
}
