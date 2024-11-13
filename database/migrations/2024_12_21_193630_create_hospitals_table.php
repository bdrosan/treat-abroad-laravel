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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->string('image')->default("default_hospital.png");
            $table->string('address');
            $table->string('moto')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode');
            $table->string('phone');
            $table->string('phone_2')->nullable();
            $table->boolean('public')->default(false);

            $table->enum("type", config('sitesettings.hospital_types'))->default("General");

            $table->timestamps();

            $table->unsignedBigInteger('city_id');
        });
        Schema::create('hospitals_labs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lab_id');
            $table->unsignedBigInteger('hospital_id');


            $table->foreign('lab_id')->references('id')->on('labs')->onDelete('cascade');
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
        });

        Schema::create('hospitals_specialities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('speciality_id');
            $table->unsignedBigInteger('hospital_id');

//            $table->foreign('speciality_id')->references('id')->on('specialities')->onDelete('cascade');
//            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
