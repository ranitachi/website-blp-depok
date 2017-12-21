<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Berita;
use App\Model\Kategori;
use App\Model\Foto;
use App\Model\Video;
use App\Model\Slider;
use Carbon\Carbon;
use DB;
use Visitor;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $bulan=date('n');
        $tahun=date('Y');
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
        $tg1=$tahun.'-'.$bulan.'-01';
        $tg2=date('Y-m-d');

        $d=DB::table('kryptonit3_counter_page_visitor')->select('*')->get();
        $vis=array();
        foreach($d as $k => $v)
        {
            //echo $v->created_at.'<br>';
            $vis[strtok($v->created_at,' ')][$v->visitor_id][]=$v;
        }

        if($bulan==date('n'))
        {
            $jlhh=selisihHari($tg1,$tg2);
            $jlhhari=$jlhh->days + 1;
        }
        else
            $jlhhari=jumlahHari($tahun,$bulan);

        $berita=Berita::orderBy('created_at','desc')->get();
        $video=Video::orderBy('created_at','desc')->get();
        $foto=Foto::orderBy('created_at','desc')->get();
        $slider=Slider::orderBy('created_at','desc')->get();
        return view('pages-backend.dashboard.index')
                    ->with('slider',$slider)
                    ->with('kat',$kt)
                    ->with('foto',$foto)
                    ->with('video',$video)
                    ->with('berita',$berita)
                    ->with('vis',$vis)
                    ->with('jlhhari',$jlhhari)
                    ->with('tahun',$tahun)
                    ->with('bulan',$bulan);
    }
}
