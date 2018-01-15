<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StatController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {     
        return view('pages-backend.stat.index');
    }

    public function data($bulan,$tahun)
    {
        $data['tahun']=$tahun;
        $data['bulan']=$bulan;

        // $jlhhari=jumlahHari($tahun,$bulan);
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
        // dd($jlhhari);
        return view('pages-backend.stat.data')
            ->with('vis',$vis)
            ->with('jlhhari',$jlhhari)
            ->with('tahun',$tahun)
            ->with('bulan',$bulan);
    }
}
