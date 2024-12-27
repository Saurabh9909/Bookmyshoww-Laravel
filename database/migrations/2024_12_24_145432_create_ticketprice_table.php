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
        Schema::create('ticketprice', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_price');
            $table->unsignedBigInteger('multiplex_id');
            $table->unsignedBigInteger('movie_id');
            $table->date('movie_date');
            $table->enum('status', ['0', '1'])->comment('0 => active || 1 => deactive')->default(0);
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
        Schema::dropIfExists('ticketprice');
    }
};
