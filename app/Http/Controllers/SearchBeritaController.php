<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Berita;

class SearchBeritaController extends Controller
{
    public function result(Request $request)
    {
        $getlatestnews = Berita::orderby('created_at', 'desc')->limit(10)->get();
        $getpopularnews = Berita::orderby('view', 'desc')->limit(5)->get();

        $getresult = Berita::where('title', 'like', "%$request->keyword%")->paginate(2);
        
        return view('front.pages.searchresult')
            ->with('keyword', $request->keyword)
            ->with('result', $getresult)
            ->with('popularnews', $getpopularnews)
            ->with('latestnews', $getlatestnews);

    }
}
