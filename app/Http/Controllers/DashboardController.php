<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Berita;
use App\Model\Kategori;
use App\Model\Foto;
use App\Model\Video;
//use App\Model\Visitor;
use Carbon\Carbon;

use Visitor;
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
        Visitor::log(); 
        //$ip=$vis->ip;
        // $article=new Article;
        // $article->addVisit();
        // $x=$article->page_visits;
        // dd($x);
        // $article->addVisitThatExpiresAt(Carbon::now()->addHours(2));

        $berita=Berita::orderBy('created_at','desc')->get();
        $video=Video::orderBy('created_at','desc')->get();
        $foto=Foto::orderBy('created_at','desc')->get();
        return view('pages-backend.dashboard.index')
                    ->with('kat',$kt)
                    ->with('foto',$foto)
                    ->with('video',$video)
                    ->with('berita',$berita);
    }
}
