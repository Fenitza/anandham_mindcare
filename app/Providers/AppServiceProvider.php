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

            /*
            |--------------------------------------------------------------------------
            | FILTER ONLY FUTURE / ACTIVE COURSES
            |--------------------------------------------------------------------------
            */
            ->filter(function ($course) {

                switch ($course->schedule_type) {

                    /*
                    |--------------------------------------------------------------------------
                    | MULTIPLE DATES
                    |--------------------------------------------------------------------------
                    */
                    case 'dates':

                        $dates = is_array($course->course_dates)
                            ? $course->course_dates
                            : json_decode($course->course_dates, true);

                        return collect($dates)
                            ->filter()
                            ->contains(fn ($date) =>
                                \Carbon\Carbon::parse($date)
                                    ->endOfDay()
                                    ->isFuture()
                            );

                    /*
                    |--------------------------------------------------------------------------
                    | MONTH RANGE
                    |--------------------------------------------------------------------------
                    */
                    case 'month_range':

                        return $course->month_end &&
                            \Carbon\Carbon::createFromFormat(
                                'Y-m',
                                $course->month_end
                            )
                            ->endOfMonth()
                            ->isFuture();

                    /*
                    |--------------------------------------------------------------------------
                    | WEEKEND RANGE
                    |--------------------------------------------------------------------------
                    */
                    case 'weekend_range':

                        return $course->weekend_end &&
                            \Carbon\Carbon::createFromFormat(
                                'Y-m',
                                $course->weekend_end
                            )
                            ->endOfMonth()
                            ->isFuture();

                    /*
                    |--------------------------------------------------------------------------
                    | DEFAULT SINGLE DATE
                    |--------------------------------------------------------------------------
                    */
                    default:

                        return $course->course_date &&
                            \Carbon\Carbon::parse($course->course_date)
                                ->endOfDay()
                                ->isFuture();
                }
            })

            /*
            |--------------------------------------------------------------------------
            | SORT BY NEAREST UPCOMING DATE
            |--------------------------------------------------------------------------
            */
            ->sortBy(function ($course) {

                switch ($course->schedule_type) {

                    /*
                    |--------------------------------------------------------------------------
                    | MULTIPLE DATES
                    |--------------------------------------------------------------------------
                    */
                    case 'dates':

                        $dates = is_array($course->course_dates)
                            ? $course->course_dates
                            : json_decode($course->course_dates, true);

                        return collect($dates)
                            ->filter()
                            ->sort()
                            ->first();

                    /*
                    |--------------------------------------------------------------------------
                    | MONTH RANGE
                    |--------------------------------------------------------------------------
                    */
                    case 'month_range':

                        return $course->month_start
                            ? \Carbon\Carbon::createFromFormat(
                                'Y-m',
                                $course->month_start
                            )->startOfMonth()
                            : now();

                    /*
                    |--------------------------------------------------------------------------
                    | WEEKEND RANGE
                    |--------------------------------------------------------------------------
                    */
                    case 'weekend_range':

                        return $course->weekend_start
                            ? \Carbon\Carbon::createFromFormat(
                                'Y-m',
                                $course->weekend_start
                            )->startOfMonth()
                            : now();

                    /*
                    |--------------------------------------------------------------------------
                    | DEFAULT SINGLE DATE
                    |--------------------------------------------------------------------------
                    */
                    default:

                        return $course->course_date
                            ? \Carbon\Carbon::parse($course->course_date)
                            : now();
                }
            })

            ->take(10);

        $view->with('upcomingCourses', $upcomingCourses);
    });
}
}
