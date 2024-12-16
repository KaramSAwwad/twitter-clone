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
        Schema::create('retweets', function (Blueprint $table) {
            $table->id(); // Primary Key: 'id'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // User who retweeted
            $table->foreignId('tweet_id')->constrained('tweets')->onDelete('cascade'); // Original tweet
            $table->string('retweet_comment', 280)->nullable(); // Optional comment
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retweets');
    }
};
