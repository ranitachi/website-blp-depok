<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Model\Profil;
class ProfilController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      $cat=Route::getFacadeRoot()->current()->uri();
      $data['category']=$cat;
      return view('pages-backend.profil.'.$cat,$data);
    }

    public function data($category)
    {
      $cat=$category;
      $profil=Profil::where('category','=',$cat)->get();
      $data['profil']=$profil;
      $data['category']=$cat;
      return view('pages-backend.profil.data',$data);
    }

    public function show($id=-1,$cat='')
    {
      $data['id']=$id;
      $data['cat']=$cat;
      $profil=Profil::where('category','=',$cat)->get();
      if($id!=-1)
        $data['det']=$profil[0];
      return view('pages-backend.profil.form',$data);
    }
    public function store(Request $request) {
      $create = Profil::create($request->all());
      $cat = $request->input('category');
      // return response()->json($create);
      return redirect(''.$cat.'')->with('pesan', 'Data '.ucwords($cat).' Berhasil Di Tambah');
    }
    public function update(Request $request, $id)
    {
        $edit = Profil::find($id)->update($request->all());
        $cat = $request->input('category');
        // return response()->json($edit);
        return redirect(''.$cat.'')->with('pesan', 'Data '.ucwords($cat).' Berhasil Di Edit');
    }

    public function destroy($id) {
      Profil::find($id)->delete();
      return response()->json(['done']);
    }
}
