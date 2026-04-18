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
    Schema::table('courses', function (Blueprint $table) {
        $table->string('zoom_link')->nullable();
        $table->boolean('enable_qr')->default(false);
    });
}

public function down()
{
    Schema::table('courses', function (Blueprint $table) {
        $table->dropColumn(['zoom_link', 'enable_qr']);
    });
}
};
