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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('issue')->nullable();
            $table->string('description')->nullable();
            $table->string('phone');
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->dateTime('dob');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->timestamps();


            $table
                ->foreignId('user_id')
                ->nullable()
                ->constrained('users');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
