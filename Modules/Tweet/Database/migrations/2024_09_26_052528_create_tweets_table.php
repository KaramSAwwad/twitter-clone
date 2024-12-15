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
        Schema::create('tweets', function (Blueprint $table) {
            $table->id(); // Primary Key: 'id'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign Key to 'users' table
            $table->string('content', 280); // Tweet content
            $table->string('media_url')->nullable(); // Media URL
            $table->boolean('is_retweet')->default(false); // Retweet flag
            $table->foreignId('original_tweet_id')->nullable()->constrained('tweets')->onDelete('cascade'); // Original tweet (if retweet)
            $table->foreignId('reply_to_tweet_id')->nullable()->constrained('tweets')->onDelete('cascade'); // Tweet being replied to
            $table->foreignId('reply_to_user_id')->nullable()->constrained('users')->onDelete('cascade'); // User being replied to
            $table->enum('visibility', ['public', 'followers'])->default('public'); // Visibility setting
            $table->timestamps(); // 'created_at' and 'updated_at'
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tweets');
    }
};
