<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::view('/hospital', 'pages.hospital.home')->name('hospital');



