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
        Schema::create('tweet_hashtags', function (Blueprint $table) {
            $table->foreignId('tweet_id')->constrained('tweets')->onDelete('cascade'); // Tweet
            $table->foreignId('hashtag_id')->constrained('hashtags')->onDelete('cascade'); // Hashtag
            $table->primary(['tweet_id', 'hashtag_id']); // Composite Primary Key
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tweet_hashtags');
    }
};
