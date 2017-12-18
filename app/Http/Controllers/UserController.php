<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    //
    public function performLogout(Request $request) {
        Auth::logout();
        return redirect('login');
    }
}
