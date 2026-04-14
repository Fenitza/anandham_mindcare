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
    Schema::create('appointments', function (Blueprint $table) {
        $table->id();

        // Patient Details
        $table->string('first_name');
        $table->string('last_name');
        $table->string('phone');
        $table->string('address')->nullable();

        // Schedule
        $table->date('date');
        $table->time('start_time');
        $table->time('end_time');

        // Service
        $table->string('service')->nullable();

        // Clinical
        $table->text('notes')->nullable();
        $table->enum('urgency', ['standard', 'priority'])->default('standard');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
