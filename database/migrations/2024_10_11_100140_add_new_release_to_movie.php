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
        Schema::table('movie', function (Blueprint $table) {
            $table->enum("new_release", ["0", "1","2"])->comment("0=>new_release 1=>old_movie 2=>popular")->after("movie_category")->default("0");
            $table->string("movie_description")->nullable()->after("new_release");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movie', function (Blueprint $table) {
            $table->dropColumn("new_release");
            $table->dropColumn("movie_description");
        });
    }
};
