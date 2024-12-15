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
        Schema::create('media', function (Blueprint $table) {
            $table->id(); // Primary Key: 'id'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Uploader
            $table->enum('media_type', ['image', 'video', 'gif']); // Media type
            $table->string('media_url'); // URL to media file
            $table->timestamp('uploaded_at')->useCurrent(); // Upload timestamp
            $table->nullableMorphs('associated'); // Polymorphic relation to tweets or messages
            $table->timestamps(); // 'created_at' and 'updated_at'
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
