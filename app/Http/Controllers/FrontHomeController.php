<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Berita;
use App\Model\Kategori;
use App\Model\Slider;
use App\Model\WebRekanan;

use Visitor;

class FrontHomeController extends Controller
{
    public function index()
    {
        Visitor::log();
        $getlatestnews = Berita::orderby('created_at', 'desc')->limit(10)->get();
        $getpopularnews = Berita::orderby('view', 'desc')->limit(5)->get();
        $getfeaturedcategories = Kategori::where('diutamakan', '1')->orderby('updated_at', 'desc')->limit(2)->get();
        $getslider = Slider::orderby('created_at', 'desc')->limit(5)->get();
        $getwebrekanan = WebRekanan::orderby('created_at', 'desc')->limit(5)->get();


        return view('front.pages.index')
            ->with('popularnews', $getpopularnews)
            ->with('slider', $getslider)
            ->with('webrekanan', $getwebrekanan)
            ->with('featuredcategories', $getfeaturedcategories)
            ->with('latestnews', $getlatestnews);
    }
}
