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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('arena_id');

            // $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // $table->foreignId('arena_id')->constrained('arenas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('arena_id')->references('id')->on('arenas')->onDelete('cascade');
            // Booking details
            $table->date('date');
            $table->time('time_from');
            $table->time('time_to');
            $table->string('confirmation_status')->default('pending'); // Could be 'pending', 'confirmed', etc.
            $table->boolean('instructor_needed')->default(0);
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
