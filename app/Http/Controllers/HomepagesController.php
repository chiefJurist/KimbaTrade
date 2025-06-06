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

    //crypto action
    public function cryptos()  {
        return view('homepages.cryptos');
    }

    //shares action
    public function shares()  {
        return view('homepages.shares');
    }

    //indices action
    public function indices()  {
        return view('homepages.indices');
    }

    //marijuana action
    public function marijuana()  {
        return view('homepages.marijuana');
    }
}
