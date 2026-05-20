<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {

            // remove old year fields
            $table->dropColumn([
                'year_start',
                'year_end',
            ]);

            // new weekend fields
            $table->string('weekend_start')->nullable();
            $table->string('weekend_end')->nullable();

            $table->json('weekend_days')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {

            // restore old fields
            $table->string('year_start')->nullable();
            $table->string('year_end')->nullable();

            // remove weekend fields
            $table->dropColumn([
                'weekend_start',
                'weekend_end',
                'weekend_days',
            ]);
        });
    }
};