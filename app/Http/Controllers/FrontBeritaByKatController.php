<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Berita;
use App\Model\Kategori;
use App\Model\Profil;
use App\Model\Foto;

class FrontBeritaByKatController extends Controller
{
    public function index($id)
    {
        $getlatestnews = Berita::orderby('created_at', 'desc')->limit(10)->get();
        $getpopularnews = Berita::orderby('view', 'desc')->limit(5)->get();
        $getnewsbycat = Berita::where('id_kategori', $id)->with('kategori')->paginate(5);

        return view('front.pages.newsbycategories')
            ->with('newsbycat', $getnewsbycat)
            ->with('popularnews', $getpopularnews)
            ->with('latestnews', $getlatestnews);
    }
}
