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
        Schema::create('admin_logs', function (Blueprint $table) {
            $table->id(); // Primary Key: 'id'
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade'); // Admin user
            $table->string('action'); // Action taken
            $table->text('details')->nullable(); // Action details
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_logs');
    }
};
