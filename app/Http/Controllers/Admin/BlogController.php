<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Tag;
use Dotenv\Util\Str;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $blogs = Blog::paginate(10);
        return view('admin.blogs.index', [
            'blogs' => $blogs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = time() . "-blog.jpg";
        $request
            ->file("image")
            ?->storeAs("images", $image);

        $blog = Blog::create([
            "title" => $request->title,
            "slug" => \Illuminate\Support\Str::slug($request->title),
            "description" => $request->description,
            "content" => $request->get("content"),
            "image" => $image
        ]);

        $blog->tags()->sync($request->get("tags"));

        return redirect()->route("admin.blogs.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tags = Tag::all();
        return view('admin.blogs.create', [
            'tags' => $tags
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::find($id);
        if (!$blog) return redirect()->route("admin.blogs.index");
        return view('admin.blogs.show', [
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        $tags = Tag::all();
        return view('admin.blogs.edit', [
            "blog" => $blog,
            "tags" => $tags
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::find($id);

        if ($request->exists("image")) {
            $image = time() . "-blog.jpg";
            $request
                ->file("image")
                ?->storeAs("images", $image);
        }


        $blog->update([
            "title" => $request->get("title"),
            "description" => $request->get("description"),
            "content" => $request->get("content"),
            "image" => $image ?? $blog->image
        ]);


        $blog
            ->tags()
            ->sync($request->get("tags"));


        return redirect()->route("admin.blogs.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::find($id)?->delete();


        return redirect()->route("admin.blogs.index");
    }
}
