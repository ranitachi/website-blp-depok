<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Slider;
class SliderController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    return view('pages-backend.slider.index');
  }
  public function data($id=-1)
  {
    $data['id']=$id;
    $data['data']=Slider::orderBy('title')->get();
    return view('pages-backend.slider.data',$data);
  }

  public function show($id=-1)
  {
    $data['id']=$id;
    if($id!=-1)
    {
      $data['det']=Slider::find($id);
    }
    return view('pages-backend.slider.form',$data);
  }

  public function store(Request $request) {
    $create = Slider::create($request->all());
    //return response()->json($create);
    return redirect('slider')->with('pesan', 'Data Slider Berhasil Di Simpan');
  }

  public function update(Request $request, $id)
  {
      $edit = Slider::find($id)->update($request->all());
      return redirect('slider')->with('pesan', 'Data Slider Berhasil Di Edit');
      // echo '<pre>';
      // print_r($request->all());
      // echo '</pre>';
      //return response()->json($edit);
  }

  public function destroy($id) {
    Slider::find($id)->delete();
    return response()->json(['done']);
  }

  public function sliderstatus($id,$st)
    {
        $dt['flag']=$st;
        $edit=Slider::find($id)->update($dt);
        return response()->json($edit);
    }
}
