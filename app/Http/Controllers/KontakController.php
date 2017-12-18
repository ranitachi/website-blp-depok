<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Kontak;
class KontakController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
      return view('pages-backend.kontak.index');
    }
    public function data($id=-1)
    {

      $contact=Kontak::all();
      $data['data']=$contact;
      return view('pages-backend.kontak.data',$data);
    }

    public function show($id=-1)
    {
      $data['id']=$id;
      if($id!=-1)
      {
        $contact=Kontak::find($id);
        $data['det']=$contact;
      }
      return view('pages-backend.kontak.form',$data);
    }
    public function store(Request $request) {
      $create = Kontak::create($request->all());
      //return response()->json($create);
       return redirect('kontak')->with('pesan', 'Data Kontak Lembaga Berhasil Di Tambah');
    }
    public function update(Request $request, $id)
    {
        $edit = Kontak::find($id)->update($request->all());
       // return response()->json($edit);
         return redirect('kontak')->with('pesan', 'Data Kontak Lembaga Berhasil Di Edit');
    }

    public function destroy($id) {
      Kontak::find($id)->delete();
      return response()->json(['done']);
    }
}
