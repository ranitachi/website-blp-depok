<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Video;
class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages-backend.video.index');
    }
    public function data($id=-1)
    {
        $data['id']=$id;
        $data['data']=Video::orderBy('title')->get();
        return view('pages-backend.video.data',$data);
    }

    public function show($id=-1)
    {
        $data['id']=$id;
        if($id!=-1)
        {
        $data['det']=Video::find($id);
        }
        return view('pages-backend.video.form',$data);
    }

    public function store(Request $request) {
        $create = Video::create($request->all());
        //return response()->json($create);
        return redirect('video')->with('pesan', 'Dokumentasi Video Berhasil Di Simpan');
    }

    public function update(Request $request, $id)
    {
        $edit = Video::find($id)->update($request->all());
         return redirect('video')->with('pesan', 'Dokumentasi Video Berhasil Di Edit');
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        //return response()->json($edit);
    }

    public function destroy($id) {
        Video::find($id)->delete();
        return response()->json(['done']);
    }
    
    public function videostatus($id,$st)
    {
        $dt['flag']=$st;
        $edit=Video::find($id)->update($dt);
        return response()->json($edit);
    }
}
