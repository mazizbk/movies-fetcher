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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->boolean('adult');
            $table->string('backdrop_path')->nullable();
            $table->unsignedBigInteger('tmdb_id')->unique();
            $table->string('title');
            $table->string('original_language');
            $table->string('original_title');
            $table->text('overview')->nullable();
            $table->string('poster_path')->nullable();
            $table->string('media_type');
            $table->json('genre_ids');
            $table->decimal('popularity', 8, 3);
            $table->date('release_date');
            $table->boolean('video');
            $table->decimal('vote_average', 4, 3);
            $table->unsignedInteger('vote_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
