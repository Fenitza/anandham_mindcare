<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::view('/hospital', 'pages.hospital.home')->name('hospital');
Route::view('/courses', 'pages.courses.home')->name('courses');
Route::view('/courses/catalog', 'pages.courses.catalog')->name('courses.catalog');
Route::view('/services', 'pages.hospital.services')->name('services');
Route::view('/about-us', 'pages.hospital.about')->name('about-us');
Route::view('/contact-us', 'pages.hospital.contact')->name('contact-us');

//sign in and sign up
Route::view('/signin', 'pages.auth.signin')->name('signin');
Route::view('/register', 'pages.auth.register')->name('register');

