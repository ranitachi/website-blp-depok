<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Regulasi;
use App\Model\Berita;
use App\Model\Kategori;
class FrontRegulasiController extends Controller
{
    public function index()
    {
        $getlatestnews = Berita::orderby('created_at', 'desc')->limit(10)->get();
        $getpopularnews = Berita::orderby('view', 'desc')->limit(5)->get();
        $getnewsbycat = Regulasi::orderby('created_at', 'desc')->paginate(8);

        return view('front.pages.regulasi-index')
             ->with('newsbycat', $getnewsbycat)
            ->with('popularnews', $getpopularnews)
            ->with('latestnews', $getlatestnews);
    }

    public function adddownload($id)
    {
        $reg=Regulasi::find($id);
        $reg->view = $reg->view+1;
        $reg->save();
    }
}
