<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::view('/hospital', 'pages.hospital.home')->name('hospital');
Route::view('/courses', 'pages.courses.home')->name('courses');
Route::view('/services', 'pages.hospital.services')->name('services');
Route::view('/about-us', 'pages.hospital.about')->name('about-us');
Route::view('/contact-us', 'pages.hospital.contact')->name('contact-us');



