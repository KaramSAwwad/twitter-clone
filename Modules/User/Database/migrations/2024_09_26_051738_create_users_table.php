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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // (PK): Unique identifier for each user.
            $table->string('username', 50)->unique(); // User's chosen handle (unique).
            $table->string('email', 100)->unique(); // User's email address (unique).
            $table->string('password'); // password_hash
            $table->string('full_name', 100)->nullable(); // User's full name.
            $table->string('bio', 160)->nullable(); // Short biography.
            $table->string('profile_picture_url')->nullable(); // URL to profile picture.
            $table->string('header_image_url')->nullable(); // URL to header/banner image.
            $table->string('website_url')->nullable(); // Personal website. if exists
            $table->string('location', 100)->nullable(); // User's location.
            $table->date('date_of_birth')->nullable(); // Date of birth.
            $table->timestamp('date_joined')->useCurrent(); // Account creation timestamp.
            $table->timestamp('last_login')->nullable(); // Last login timestamp.
            $table->boolean('is_verified')->default(false); //  Boolean for account verification.
            $table->boolean('is_private')->default(false); // Boolean for private accounts.
            $table->enum('account_status', ['active', 'suspended', 'deactivated'])->default('active'); // Status (active, suspended, deactivated).
            $table->string('phone_number', 20)->nullable(); // User's phone number.
            $table->boolean('email_verified')->default(false); //  Boolean for email verification.
            $table->boolean('phone_verified')->default(false); // Boolean for phone verification.
            $table->enum('direct_message_settings', ['everyone', 'followers'])->default('everyone'); // DM preferences.
            $table->timestamps(); // includes created_at and updated_at //
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
