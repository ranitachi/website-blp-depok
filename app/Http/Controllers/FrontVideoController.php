<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Berita;
use App\Model\Kategori;
use App\Model\Profil;
use App\Model\Video;

class FrontVideoController extends Controller
{
    public function index()
    {
        $getlatestnews = Berita::orderby('created_at', 'desc')->limit(10)->get();
        $getpopularnews = Berita::orderby('view', 'desc')->limit(5)->get();
        $getvideo = Video::paginate(10);

        return view('front.pages.video')
            ->with('video', $getvideo)
            ->with('popularnews', $getpopularnews)
            ->with('latestnews', $getlatestnews);
    }
}
