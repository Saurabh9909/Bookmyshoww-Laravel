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
        Schema::create('bookingdetails', function (Blueprint $table) {
            $table->id();
            $table->string('movie_id');
            $table->string('movie_time');
            $table->string('multiplex_id');
            $table->string('seat_number');
            $table->integer('total_seat');
            $table->integer('total_amount');
            $table->string('user_id');
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('multiplex_id')->on('multiplex')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('movie_id')->on('movie')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookingdetails');
    }
};
