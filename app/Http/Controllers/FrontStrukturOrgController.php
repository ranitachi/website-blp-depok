<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Berita;
use App\Model\Kategori;
use App\Model\Profil;

class FrontStrukturOrgController extends Controller
{
    public function index()
    {
        $getlatestnews = Berita::orderby('created_at', 'desc')->limit(10)->get();
        $getpopularnews = Berita::orderby('view', 'desc')->limit(5)->get();
        $getstruktur = Profil::where('category', 'struktur-organisasi')->first();

        return view('front.pages.strukturorganisasi')
            ->with('struktur', $getstruktur)
            ->with('popularnews', $getpopularnews)
            ->with('latestnews', $getlatestnews);
    }
}
