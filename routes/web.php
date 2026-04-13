<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('pages.home');
});

Route::view('/hospital', 'pages.hospital.home')->name('hospital');
Route::get('/courses', [CourseController::class, 'home'])->name('courses');
Route::view('/courses/catalog', 'pages.courses.catalog')->name('courses.catalog');
Route::get('/courses/list', [CourseController::class, 'list'])->name('courses.list');
Route::get('/courses/{id}', [CourseController::class, 'detail'])->name('courses.detail');
Route::get('/courses/enroll/{id}', [CourseController::class, 'enroll'])->name('courses.enroll');
Route::view('/courses/syllabus', 'pages.courses.course_syllabus')->name('courses.syllabus');
Route::view('/services', 'pages.hospital.services')->name('services');
Route::view('/gallery', 'pages.hospital.gallery')->name('gallery');
Route::view('/blogs', 'pages.hospital.blogs')->name('blogs');
Route::view('/about-us', 'pages.hospital.about')->name('about-us');
Route::view('/contact-us', 'pages.hospital.contact')->name('contact-us');
Route::view('/appointment', 'pages.hospital.appointments')->name('appointment');


/*
|--------------------------------------------------------------------------
| Auth Pages
|--------------------------------------------------------------------------
*/
Route::view('/signin', 'pages.auth.signin')->name('signin');
// Show register page
Route::get('/register', function () {
    return view('pages.auth.register');
})->name('register');

// Handle form submit
Route::post('/register', [UserAuthController::class, 'register'])
    ->name('register.store');

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
    Route::view('/users/add', 'pages.dasboard.admin.add_user')->name('admin.users.add');
    Route::post('/users/store', [UserAuthController::class, 'storeUser'])
    ->name('users.store');
    Route::get('/courses', [CourseController::class, 'index'])->name('admin.courses');
    Route::view('/courses/add', 'pages.dasboard.admin.add_course')->name('admin.courses.add');
    Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/admin/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit'); 
    Route::put('/admin/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/admin/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

    Route::get('/gallery', [GalleryController::class,'index'])->name('admin.gallery');
    Route::view('/gallery/add', 'pages.dasboard.admin.add_gallery')->name('admin.gallery.add');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('galleries.store');
    Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('galleries.edit'); 
    Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('galleries.update');
    Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('galleries.destroy');


    Route::get('/blogs',[BlogController::class, 'index'])->name('admin.blogs');
    Route::view('/blogs/add', 'pages.dasboard.admin.add_blog')->name('admin.blogs.add');
    Route::post('/blogs/store', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/admin/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/admin/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');

    Route::view('/appointments', 'pages.dasboard.admin.appointments')->name('admin.appointments');
    Route::view('/appointments/schedule', [AppointmentController::class,'schedule'])->name('admin.appointments.schedule');
    

    Route::view('/attendance', 'pages.dasboard.admin.attendance')->name('admin.attendance');
    Route::view('/payments', 'pages.dasboard.admin.payments')->name('admin.payments');
    Route::view('/grant-access', 'pages.dasboard.admin.grant-access')->name('admin.grant-access');
    Route::view('/quote', 'pages.dasboard.admin.quote')->name('admin.quote');
});

