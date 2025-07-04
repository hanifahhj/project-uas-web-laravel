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
        // database/migrations/2025_07_04_000002_create_bookings_table.php
Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->string('customer_name');
    $table->string('email');
    $table->string('phone');
    $table->date('booking_date');
    $table->time('booking_time');
    $table->integer('guests');
    $table->text('special_request')->nullable();
    $table->foreignId('menu_id')->constrained()->onDelete('cascade');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
