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
        Schema::create('followers', function (Blueprint $table) {
            $table->foreignId('follower_id')->constrained('users')->onDelete('cascade'); // User who follows
            $table->foreignId('following_id')->constrained('users')->onDelete('cascade'); // User being followed
            $table->timestamp('followed_at')->useCurrent(); // Follow timestamp
            $table->primary(['follower_id', 'following_id']); // Composite Primary Key
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('followers');
    }
};
