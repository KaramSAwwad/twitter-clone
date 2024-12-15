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
        Schema::create('replies', function (Blueprint $table) {
            $table->id(); // Primary Key: 'id'
            $table->foreignId('tweet_id')->constrained('tweets')->onDelete('cascade'); // Foreign Key to 'tweets' table
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign Key to 'users' table
            $table->string('content', 280); // Reply content
            $table->timestamps(); // 'created_at' and 'updated_at'
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('replies');
    }
};
