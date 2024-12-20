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
        Schema::create('blocks', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // User who blocked
            $table->foreignId('blocked_user_id')->constrained('users')->onDelete('cascade'); // User being blocked
            $table->timestamp('blocked_at')->useCurrent(); // Block timestamp
            $table->primary(['user_id', 'blocked_user_id']); // Composite Primary Key
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
