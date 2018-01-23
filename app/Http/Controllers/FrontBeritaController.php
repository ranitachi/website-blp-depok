<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Berita;

class FrontBeritaController extends Controller
{
    public function index($id)
    {
        $getlatestnews = Berita::orderby('created_at', 'desc')->limit(10)->get();
        $getpopularnews = Berita::orderby('view', 'desc')->limit(5)->get();
        
        $getnewsdetail = Berita::find($id);
        $getnewsdetail->view = $getnewsdetail->view + 1;
        $getnewsdetail->save();

        return view('front.pages.detail')
            ->with('newsdetail', $getnewsdetail)
            ->with('popularnews', $getpopularnews)
            ->with('latestnews', $getlatestnews);
    }
}
