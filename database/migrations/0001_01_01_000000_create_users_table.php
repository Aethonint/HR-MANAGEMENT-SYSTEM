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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            // Additional Fields
            
            $table->string('profile_picture')->nullable(); // Profile picture URL
            $table->json('permissions')->nullable(); // JSON for storing specific permissions
            $table->foreignId('department_id')->nullable(); // Foreign key for department
             $table->enum('role', ['SuperAdmin', 'HRManager', 'AccountsManager', 'Admin', 'Staff'])->default('Staff'); // User's role (Super Admin, HR Manager, etc.)
            $table->enum('status', ['active', 'inactive', 'suspended', 'pending'])->default('active'); // Account status (active/inactive/suspended)
            $table->timestamp('last_login')->nullable(); // Last login timestamp
            $table->date('start_date')->nullable(); // Date when the user started
            $table->integer('employee_id')->nullable(); // Employee ID (HR tracking)
            $table->string('address')->nullable(); // User's address
            $table->date('joining_date')->nullable(); // Date when the user joined the company
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
