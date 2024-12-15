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
        Schema::create('lists', function (Blueprint $table) {
            $table->id(); // Primary Key: 'id'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // List owner
            $table->string('name'); // List name
            $table->string('description')->nullable(); // List description
            $table->boolean('is_private')->default(false); // Privacy setting
            $table->timestamps(); // 'created_at' and 'updated_at'
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lists');
    }
};
