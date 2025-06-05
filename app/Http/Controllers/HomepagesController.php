<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    //
    public function about() {
        return view('homepages.about');
    }

    //forex action
    public function forex()  {
        return view('homepages.forex');
    }
}
