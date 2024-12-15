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
        Schema::create('password_resets', function (Blueprint $table) {
            $table->id('reset_id'); // (PK): Unique identifier.
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // (FK): User requesting reset.
            $table->string('token'); // Reset token.
            $table->timestamp('created_at')->useCurrent(); // Timestamp
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_resets');
    }
};
