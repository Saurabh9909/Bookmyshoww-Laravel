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
        // Schema::create('bookingdetails', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('user_id')->nullable();
        //     $table->string('custname')->nullable();
        //     $table->string('custemail')->nullable();
        //     $table->string('custmob')->nullable();
        //     $table->string('movie_name')->nullable();
        //     $table->string('ticketNumber')->nullable();
        //     $table->string('multiplex_name')->nullable();
        //     $table->string('seats')->nullable();
        //     $table->integer('totalseat')->nullable();
        //     $table->integer('totalprice')->nullable();
        //     $table->string('ticketdate')->nullable();
        //     $table->string('tickettime')->nullable();
        //     $table->integer('totalamount')->nullable();
        //     $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete()->cascadeOnUpdate()->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookingdetails');
    }
};
