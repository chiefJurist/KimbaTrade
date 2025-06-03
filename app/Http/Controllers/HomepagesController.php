<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    //
    public function about() {
        return view('homepages.about');
    }
}
