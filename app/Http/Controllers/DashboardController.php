<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Berita;
use App\Model\Kategori;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kat=Kategori::all();
        $kt=[];
        foreach($kat as $k => $v)
        {
            $kt[$v->id]=$v;
        }

        $berita=Berita::orderBy('created_at','desc')->limit(5)->get();
        return view('pages-backend.dashboard.index')
                    ->with('kat',$kt)
                    ->with('berita',$berita);
    }
}
