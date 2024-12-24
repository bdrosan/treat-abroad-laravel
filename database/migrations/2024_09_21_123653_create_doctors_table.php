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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('slug')->unique()->nullable();

            $table->string('profile_picture')->default("default_doctor_avatar.png"); // URL to profile picture
            $table->string('email')->unique()->nullable();
            $table->string('phone_number')->nullable();
            $table->string('license_number')->unique()->nullable();
            $table->string('qualification')->nullable();;
            $table->integer('experience_years')->nullable()->unsigned()->default(0);
            $table->text('address')->nullable();
            $table->date('dob')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->default("male");
            $table->string('nationality', 100)->nullable();
            $table->decimal('consultation_fee', 8, 2)->nullable(); // Consultation fee in appropriate currency
            $table->longText('bio')->nullable(); // Brief bio or description of the doctors
            $table->json('working_hours')->nullable(); // JSON format for working hours
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();

            $table->softDeletes();



            $table->unsignedBigInteger("city_id")->nullable();
            $table->unsignedBigInteger('department_id')->nullable();

            $table
                ->foreign("department_id")
                ->references("id")
                ->on("departments")
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
