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
        Schema::create('trends', function (Blueprint $table) {
            $table->id(); // Primary Key: 'id'
            $table->string('tag'); // Trending tag
            $table->unsignedBigInteger('tweet_volume')->default(0); // Number of tweets
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trends');
    }
};
