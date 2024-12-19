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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("show_id");
            $table->unsignedBigInteger("admin_id");
            $table->string("ticket_no");
            $table->date("show_date");
            $table->string("seat_no");
            $table->string("price");
            $table->string("hall_no");
            $table->foreign("show_id")->references("id")->on("show")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign("admin_id")->references("id")->on("admin")->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
