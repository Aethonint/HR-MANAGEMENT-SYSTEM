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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
              $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Linking to the 'users' table
            $table->string('employee_no')->nullable(); // Employee Number
            $table->string('phone')->nullable(); // Phone number
            $table->string('address')->nullable(); // Address
            $table->date('dob')->nullable(); // Date of Birth
            $table->enum('employee_status', ['active', 'probation', 'inactive'])->default('active'); // Employee status
            $table->enum('employment_type', ['employee', 'self-employed'])->default('employee'); // Employment type
            $table->string('emergency_contact_name')->nullable(); // Emergency contact name
            $table->string('emergency_contact_relation')->nullable(); // Emergency contact relation
            $table->string('emergency_contact_phone')->nullable(); // Emergency contact phone
            $table->decimal('document_status_percentage', 5, 2)->default(0); // Document status percentage (auto-calculated)
            $table->string('country')->nullable(); // Country
            $table->string('profile_picture')->nullable(); // Profile Picture
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
