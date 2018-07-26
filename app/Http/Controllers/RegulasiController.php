<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Regulasi;

class RegulasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages-backend.regulasi.index');
    }

    public function regulasistatus($id,$st)
    {
        $dt['flag']=$st;
        $edit = Regulasi::find($id)->update($dt);
        return response()->json($edit);
        // dd($dt);
    }
    public function data($id=-1)
    {
        $data['id']=$id;
        $data['data']=Regulasi::orderBy('created_at','desc')->get();
        return view('pages-backend.regulasi.data',$data);
    }

    public function show($id=-1)
    {
        $data['id']=$id;
        
        if($id!=-1)
        {
            $data['det']=Regulasi::find($id);
        }
        return view('pages-backend.regulasi.form',$data);
    }

    public function store(Request $request) {
        $create = Regulasi::create($request->all());
        // return response()->json($create);
        return redirect('regulasi')->with('pesan', 'Data Regulasi Berhasil Di Simpan');
    }

    public function update(Request $request, $id)
    {
        $edit = Regulasi::find($id)->update($request->all());
        // return response()->json($edit);
        return redirect('regulasi')->with('pesan', 'Data Regulasi Berhasil Di Edit');
    }

    public function destroy($id) {
        Regulasi::find($id)->delete();
        return response()->json(['done']);
    }
}
