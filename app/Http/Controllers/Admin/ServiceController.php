<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Blog;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(10);

        return view("admin.services.index", [
            "services" => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogs = Blog::all();
        return view("admin.services.create", [
            "blogs" => $blogs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        if ( $request->hasFile("image") ) {
            $image = time() . "-service.jpg";
            $request
                ->file("image")
                ->storeAs("images", $image);
        }
        Service::create([
            "name" => $request->name,
            "image" => $image ?? "default_service_avatar.png",
            "blog_id" => $request->blog_id
        ]);
        return redirect()->route("admin.services.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::find($id);
        return view("admin.services.show", [
            "service" => $service
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        $blogs = Blog::all();
        return view("admin.services.edit", [
            "service" => $service,
            "blogs" => $blogs
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, string $id)
    {
        if ( $request->hasFile("image") ) {
            $image = time() . "-service.jpg";
            $request
                ->file("image")
                ->storeAs("images", $image);
        }

        $service = Service::find($id);
        $service->update([
            "name" => $request->name ?? $service->name,
            "image" => $image ?? $service->image,
            "blog_id" => $request->blog_id ?? $service->name,
        ]);
        return redirect()->route("admin.services.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::find($id)->delete();
        return redirect()->route("admin.services.index");
    }
}
