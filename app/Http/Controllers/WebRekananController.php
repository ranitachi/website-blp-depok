<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\WebRekanan;

class WebRekananController extends Controller
{
    public function index()
    {
        $get = WebRekanan::all();

        return view('pages-backend.web-rekanan.index')->with('data', $get);
    }
}
