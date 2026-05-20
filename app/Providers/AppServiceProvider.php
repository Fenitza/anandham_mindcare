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

        $upcomingCourses = Course::where('status', 'upcoming')
            ->get()
            ->filter(function ($course) {

                switch ($course->schedule_type) {

                    case 'dates':

                        $dates = is_array($course->course_dates)
                            ? $course->course_dates
                            : json_decode($course->course_dates, true);

                        return collect($dates)
                            ->filter()
                            ->contains(fn ($date) =>
                                \Carbon\Carbon::parse($date)->isFuture()
                            );

                    case 'month_range':

                        return $course->month_end &&
                            \Carbon\Carbon::parse($course->month_end)->endOfMonth()->isFuture();

                    case 'year_range':

                        return $course->year_end >= now()->year;

                    default:
                        return false;
                }
            })
            ->sortBy(function ($course) {

                switch ($course->schedule_type) {

                    case 'dates':

                        $dates = is_array($course->course_dates)
                            ? $course->course_dates
                            : json_decode($course->course_dates, true);

                        return collect($dates)
                            ->filter()
                            ->sort()
                            ->first();

                    case 'month_range':

                        return $course->month_start;

                    case 'year_range':

                        return $course->year_start;

                    default:
                        return now();
                }
            })
            ->take(10);

        $view->with('upcomingCourses', $upcomingCourses);
    });
}
}
