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
        Schema::create('direct_messages', function (Blueprint $table) {
            $table->id(); // Primary Key: 'id'
            $table->foreignId('sender_id')->constrained('users')->onDelete('cascade'); // Message sender
            $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade'); // Message receiver
            $table->text('content')->nullable(); // Message content
            $table->string('media_url')->nullable(); // Media URL
            $table->timestamp('sent_at')->useCurrent(); // Sent timestamp
            $table->boolean('is_read')->default(false); // Read status
            $table->timestamps(); // 'created_at' and 'updated_at'
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direct_messages');
    }
};
