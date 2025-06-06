<?php

use App\Http\Controllers\HomepagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('guest')->controller(HomepagesController::class)->group(function(){
    Route::get('/about', 'about')->name('homepages.about');
    Route::get('/forex', 'forex')->name('homepages.forex');
    Route::get('/cryptos', 'cryptos')->name('homepages.cryptos');
    Route::get('/shares', 'shares')->name('homepages.shares');
    Route::get('/indices', 'indices')->name('homepages.indices');
    Route::get('/marijuana', 'marijuana')->name('homepages.marijuana');
});