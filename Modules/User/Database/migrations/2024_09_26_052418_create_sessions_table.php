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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id('session_id'); // Primary Key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign Key to 'users' table
            $table->string('token', 80)->unique(); // Session token
            $table->timestamp('created_at')->useCurrent(); // Creation timestamp
            $table->timestamp('expires_at')->nullable(); // Expiration timestamp (nullable)
            $table->string('ip_address', 45)->nullable(); // IP address of the user
            $table->string('user_agent')->nullable(); // User agent string
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};



