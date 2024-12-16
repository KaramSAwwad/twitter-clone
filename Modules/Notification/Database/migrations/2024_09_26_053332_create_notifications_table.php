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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id(); // Primary Key: 'id'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Recipient
            $table->enum('type', ['like', 'retweet', 'reply', 'follow', 'mention']); // Notification type
            $table->foreignId('source_user_id')->nullable()->constrained('users')->onDelete('set null'); // Source user
            $table->foreignId('tweet_id')->nullable()->constrained('tweets')->onDelete('set null'); // Associated tweet
            $table->json('data')->nullable(); // Additional data
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columnsp
            $table->boolean('is_read')->default(false); // Read status
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
