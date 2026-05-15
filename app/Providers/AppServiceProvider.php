<?php

namespace App\Providers;
use App\Models\Course;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
        if ($view->offsetExists('upcomingCourses')) {
            return;
        }

        $upcomingCourses = Course::whereDate('course_date', '>=', now())
            ->orderBy('course_date')
            ->take(10)
            ->get();

        $view->with('upcomingCourses', $upcomingCourses);
        });
    }
}
