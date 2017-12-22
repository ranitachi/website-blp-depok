<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Users;
use Auth;
class UserController extends Controller
{
    //
    public function performLogout(Request $request) {
        Auth::logout();
        return redirect('login');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages-backend.user.index');
    }
    public function data($id=-1)
    {
        $data['id']=$id;
        $data['data']=Users::orderBy('name')->get();
        return view('pages-backend.user.data',$data);
    }

    public function show($id=-1)
    {
        $data['id']=$id;
        if($id!=-1)
        {
        $data['det']=Users::find($id);
        }
        return view('pages-backend.user.form',$data);
    }

    public function store(Request $request) {
        // $create = Users::create($request->all());
        $data=$request->all();
        $data['password']=bcrypt($request->input('nip'));
        $create = Users::create($data);
        return redirect('user')->with('pesan', 'Data User Berhasil Di Simpan');
    }

    public function update(Request $request, $id)
    {
        $edit = Users::find($id)->update($request->all());
         return redirect('user')->with('pesan', 'Data User Berhasil Di Edit');
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        //return response()->json($edit);
    }

    public function destroy($id) {
        Users::find($id)->delete();
        return response()->json(['done']);
    }
}
