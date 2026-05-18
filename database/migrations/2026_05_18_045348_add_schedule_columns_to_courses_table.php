<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {

            // schedule type
            $table->string('schedule_type')->nullable()->after('course_time');

            // multiple random dates
            $table->json('course_dates')->nullable()->after('schedule_type');

            // month range
            $table->string('month_start')->nullable()->after('course_dates');
            $table->string('month_end')->nullable()->after('month_start');

            // year range
            $table->year('year_start')->nullable()->after('month_end');
            $table->year('year_end')->nullable()->after('year_start');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {

            $table->dropColumn([
                'schedule_type',
                'course_dates',
                'month_start',
                'month_end',
                'year_start',
                'year_end',
            ]);

        });
    }
};
