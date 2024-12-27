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
        Schema::create('multiplex', function (Blueprint $table) {
            $table->id();
            $table->string('multiplex_name');
            $table->string('location');
            $table->enum('status',['0','1'])->comment("0 => active 1 => deactivate")->default(0);
            $table->timestamps();
            $table->foreign('location')->on('city')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiplex');
    }
};
