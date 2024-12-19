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
            $table->text("movie_poster")->nullable()->after("release_date");
            $table->text("movie_banner")->nullable()->after("movie_poster");
            $table->string("movie_duration")->after("movie_banner")->nullable();
            $table->enum("movie_status", ["0", "1"])->after("movie_duration")->default(0)->comment("0=>active ,1=>deactive");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movie', function (Blueprint $table) {
            $table->dropColumn("movie_poster");
            $table->dropColumn("movie_banner");
            $table->dropColumn("movie_status");
            $table->dropColumn("movie_duration");
        });
    }
};
