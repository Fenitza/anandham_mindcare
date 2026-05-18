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

            // Pricing
            $table->decimal('early_bird_fee', 10, 2)
                ->nullable()
                ->after('fee');

            $table->string('international_currency')
                ->nullable()
                ->after('early_bird_fee');

            $table->decimal('international_fee', 10, 2)
                ->nullable()
                ->after('international_currency');

            $table->decimal('international_early_bird_fee', 10, 2)
                ->nullable()
                ->after('international_fee');

            // Course Mode
            $table->string('mode')
                ->nullable()
                ->after('course_type');

            $table->string('venue_link')
                ->nullable()
                ->after('zoom_link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn([
                'early_bird_fee',
                'international_currency',
                'international_fee',
                'international_early_bird_fee',
                'mode',
                'venue_link',
            ]);
        });
    }
};
