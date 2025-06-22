<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraderController extends Controller
{
    //returning the overview page
    public function overview() {
        return view('trader.overview');
    }
}
