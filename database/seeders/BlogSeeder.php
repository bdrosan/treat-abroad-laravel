<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::all();
        Blog::factory(100)
            ->create()
            ->each(function ($blog) use ($tags) {
                $tagIds = $tags
                            ->random(rand(1, 5))
                            ->map(function ($tag) use ($blog) {
                                return $tag->id;
                            })
                            ->toArray();

                print_r($tagIds);
                $blog->tags()->sync($tagIds);
            });


    }
}
