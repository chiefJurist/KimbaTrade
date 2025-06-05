<?php

use App\Http\Controllers\HomepagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('guest')->controller(HomepagesController::class)->group(function(){
    Route::get('/about', 'about')->name('about');
    Route::get('/forex', 'forex')->name('forex');
});