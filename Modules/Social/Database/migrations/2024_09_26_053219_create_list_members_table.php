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
        Schema::create('list_members', function (Blueprint $table) {
            $table->foreignId('user_list_id')->constrained('user_lists')->onDelete('cascade'); // List ID
            $table->foreignId('member_id')->constrained('users')->onDelete('cascade'); // User added to the list
            $table->primary(['user_list_id', 'member_id']); // Composite Primary Key
            $table->timestamps(); // 'created_at' and 'updated_at'
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_members');
    }
};
