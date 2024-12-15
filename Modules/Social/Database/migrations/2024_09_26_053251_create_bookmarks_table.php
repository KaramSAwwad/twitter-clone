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
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // User who bookmarked
            $table->foreignId('tweet_id')->constrained('tweets')->onDelete('cascade'); // Tweet bookmarked
            $table->timestamp('bookmarked_at')->useCurrent(); // Bookmark timestamp
            $table->primary(['user_id', 'tweet_id']); // Composite Primary Key
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookmarks');
    }
};
