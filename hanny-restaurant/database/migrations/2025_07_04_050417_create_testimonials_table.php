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
        // database/migrations/2025_07_04_000003_create_testimonials_table.php
Schema::create('testimonials', function (Blueprint $table) {
    $table->id();
    $table->string('customer_name');
    $table->text('testimonial');
    $table->integer('rating');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
