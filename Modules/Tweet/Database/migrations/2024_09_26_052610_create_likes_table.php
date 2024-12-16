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
        Schema::create('likes', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // User who liked
            $table->foreignId('tweet_id')->constrained('tweets')->onDelete('cascade'); // Liked tweet
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
            $table->primary(['user_id', 'tweet_id']); // Composite Primary Key
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
