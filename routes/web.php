<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;

Route::get('/', function () {
    return view('pages.home');
});

Route::view('/hospital', 'pages.hospital.home')->name('hospital');
Route::view('/courses', 'pages.courses.home')->name('courses');
Route::view('/courses/catalog', 'pages.courses.catalog')->name('courses.catalog');
Route::view('/courses/list', 'pages.courses.course_list')->name('courses.list');
Route::view('/courses/detail', 'pages.courses.course_detail')->name('courses.detail');
Route::view('/courses/enroll', 'pages.courses.course_enroll')->name('courses.enroll');
Route::view('/courses/syllabus', 'pages.courses.course_syllabus')->name('courses.syllabus');
Route::view('/services', 'pages.hospital.services')->name('services');
Route::view('/about-us', 'pages.hospital.about')->name('about-us');
Route::view('/contact-us', 'pages.hospital.contact')->name('contact-us');
Route::view('/courses/list', 'pages.courses.course_list')->name('courses.list');

/*
|--------------------------------------------------------------------------
| Auth Pages
|--------------------------------------------------------------------------
*/
Route::view('/signin', 'pages.auth.signin')->name('signin');
Route::view('/register', 'pages.auth.register')->name('register');

Route::post('/login', [UserAuthController::class, 'login'])->name('login');
Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');

// Prevent direct /login access
Route::get('/login', fn() => redirect()->route('signin'));


Route::prefix('user')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::view('/dashboard', 'pages.dasboard.users.dashboard')->name('user.dashboard');
    });
    }); 

Route::post('/login', [UserAuthController::class, 'login'])->name('login');

// OPTIONAL (prevents error if /login opened directly)
Route::get('/login', function () {
    return redirect()->route('signin');
});

// Admin Dashboard Routes (updated paths)
Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::view('/dashboard', 'pages.dasboard.admin.dashboard')->name('admin.dashboard');
    Route::view('/users', 'pages.dasboard.admin.users')->name('admin.users');
    Route::view('/courses', 'pages.dasboard.admin.courses')->name('admin.courses');
    Route::view('/attendance', 'pages.dasboard.admin.attendance')->name('admin.attendance');
    Route::view('/payments', 'pages.dasboard.admin.payments')->name('admin.payments');
    Route::view('/grant-access', 'pages.dasboard.admin.grant-access')->name('admin.grant-access');
    Route::view('/quote', 'pages.dasboard.admin.quote')->name('admin.quote');
});

