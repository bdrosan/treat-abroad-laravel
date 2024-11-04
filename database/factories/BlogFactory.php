<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,              // Generates a random sentence as the title
            'slug' => Str::slug($this->faker->sentence),    // Converts the title into a slug format
            'description' => $this->faker->paragraph,       // Generates a random paragraph for description
            'content' => $this->faker->text(2000),          // Generates random content text (up to 2000 characters)
            'image' => $this->faker->imageUrl()
        ];
    }
}
