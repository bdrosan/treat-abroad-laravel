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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->longText("description")->nullable();
            $table->longText("content")->nullable();
            $table->string("image")->default("default_blog_avatar.jpg");

            $table->longText("meta_keywords")->nullable();
            $table->longText("meta_description")->nullable();

            $table->timestamps();
        });

        Schema::create('blog_tags', function (Blueprint $table) {
            $table->id();
            $table->string("blog_id");
            $table->string("tag_id");

            $table->timestamps();

//            $table
//                ->foreign("blog_id")
//                ->references("id")
//                ->on("blogs")
//                ->cascadeOnDelete();
//
//            $table
//                ->foreign("tag_id")
//                ->references("id")
//                ->on("tags")
//                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
