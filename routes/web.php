<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    return view('pages.home');
});

Route::view('/hospital', 'pages.hospital.home')->name('hospital');
Route::get('/courses', [CourseController::class, 'home'])->name('courses');
Route::view('/courses/catalog', 'pages.courses.catalog')->name('courses.catalog');
Route::get('/courses/list', [CourseController::class, 'list'])->name('courses.list');
Route::get('/courses/{id}', [CourseController::class, 'detail'])->name('courses.detail');
Route::get('/courses/enroll/{id}', [CourseController::class, 'enroll'])->name('courses.enroll');
Route::get('/courses/reserve/{id}', [CourseController::class, 'reserve'])->middleware('auth')
    ->name('courses.reserve');
Route::post('/course/{id}/enroll', [EnrollmentController::class, 'submit'])->name('course.enroll.submit');
Route::get('/course/enroll/{id}', [EnrollmentController::class, 'handleEnrollment'])->name('course.enroll.handle');
Route::view('/courses/syllabus', 'pages.courses.course_syllabus')->name('courses.syllabus');
Route::view('/services', 'pages.hospital.services')->name('services');
Route::view('/gallery', 'pages.hospital.gallery')->name('gallery'); 
Route::view('/blogs', 'pages.hospital.blogs')->name('blogs');
Route::view('/about-us', 'pages.hospital.about')->name('about-us');
Route::view('/contact-us', 'pages.hospital.contact')->name('contact-us');



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
    Route::middleware('auth:web')->group(function () {
        Route::view('/dashboard', 'pages.dasboard.users.dashboard')->name('user.dashboard');

        Route::get('/appointments/list', [AppointmentController::class, 'index'])->name('user.appointments.list');
        Route::view('/appointment/add', 'pages.dasboard.users.appointments')->name('user.appointment.add');
        Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');

        Route::get('/courses/enrollments', [EnrollmentController::class, 'index'])->name('user.course.enrollments');
        Route::get('/courses/enrollments/{id}', [EnrollmentController::class, 'show'])->name('user.course.enrollment.show');
        
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
    
    Route::get('/users', [UserAuthController::class, 'usersIndex'])->name('admin.users');
    Route::view('/users/add', 'pages.dasboard.admin.add_user')->name('admin.users.add');
    Route::get('/users/{id}/edit', [UserAuthController::class, 'edit'])->name('admin.users.edit');
    Route::post('/users/{id}/update', [UserAuthController::class, 'update'])->name('admin.users.update');
    Route::post('/users/store', [UserAuthController::class, 'storeUser'])->name('users.store');
    Route::post('/users/toggle/{id}', [UserAuthController::class, 'toggleStatus'])->name('admin.users.toggle');
    Route::get('/users/show/{id}', [UserAuthController::class, 'show'])->name('admin.users.show');


    Route::get('/courses', [CourseController::class, 'index'])->name('admin.courses');
    Route::view('/courses/add', 'pages.dasboard.admin.add_course')->name('admin.courses.add');
    Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit'); 
    Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
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

    Route::get('/appointments/list', [AppointmentController::class, 'adminIndex'])->name('admin.appointments.list');
    Route::view('/appointments/schedule', [AppointmentController::class,'schedule'])->name('admin.appointments.schedule');
    Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('/appointment/{id}/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');
    Route::put('/appointment/{id}', [AppointmentController::class, 'update'])->name('appointment.update');

    Route::get('/payments', [EnrollmentController::class, 'paymentVerifications'])->name('admin.payments');
    Route::post('/payments/approve/{id}', [EnrollmentController::class, 'approve'])->name('admin.payments.approve');
    Route::post('/payments/reject/{id}', [EnrollmentController::class, 'reject'])->name('admin.payments.reject');
    Route::post('/payments/revert/{id}', [EnrollmentController::class, 'revert'])->name('admin.payments.revert');
    
    Route::view('/attendance', 'pages.dasboard.admin.attendance')->name('admin.attendance');
    
    
});

