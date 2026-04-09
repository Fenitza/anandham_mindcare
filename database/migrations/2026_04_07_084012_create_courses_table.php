<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('courses', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('course_type'); // free, premium, specialised
        $table->string('duration')->nullable();
        $table->decimal('fee', 10, 2)->nullable();
        $table->string('capacity')->nullable();
        $table->string('marquee_text')->nullable();
        $table->string('status')->default('active'); // active, waitlist, closed
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
