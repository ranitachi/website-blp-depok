<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Berita;
use App\Model\Kategori;
use App\Model\Profil;

class FrontVisiMisiController extends Controller
{
    public function index()
    {
        $getlatestnews = Berita::orderby('created_at', 'desc')->limit(10)->get();
        $getpopularnews = Berita::orderby('view', 'desc')->limit(5)->get();
        $getvisimisi = Profil::where('category', 'visi-misi')->first();

        return view('front.pages.visimisi')
            ->with('visimisi', $getvisimisi)
            ->with('popularnews', $getpopularnews)
            ->with('latestnews', $getlatestnews);
    }
}
