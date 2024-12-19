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
        Schema::create('show', function (Blueprint $table) {
            $table->id();
            $table->string("show_start_time");
            $table->string("show_end_time");
            $table->string("language");
            $table->enum("show_type", ['2d', '3d'])->default('2d');
            $table->enum("show_status", ['0', '1'])->comment("0 => activate , '1 => deactivate'")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('show');
    }
};
