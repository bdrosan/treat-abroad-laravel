<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainSlider;
use App\Models\Setting;
use http\Env\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MainSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mainSlides = MainSlider::all();
        return view('admin.main-slider.index', [
            "mainSlides" => $mainSlides
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "title" => "required|string",
            "link" => "required|string",
            "image" => "required|file",
        ]);
        $image = time() . "-main-slide.jpg";

        $request
            ->file("image")
            ?->storeAs("images", $image);

//        return request()->get("x");
        MainSlider::create([
            "title" => $request->get("title", ""),
            "link" => $request->get("link", ""),
            "image" => $image
        ]);


        return redirect()->route("admin.main-slider.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function updateSiteLogo(Request $request)
    {
        $image = time() . "-site-logo.jpg";

//        return request()->get("x");
        $request
            ->file("site_logo")
            ?->storeAs("images", $image);


        Setting::updateOrCreate(
            ['key' => "site_logo_url"],
            ['value' => $image]
        );

        return response()->json([
            "message" => "success"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
