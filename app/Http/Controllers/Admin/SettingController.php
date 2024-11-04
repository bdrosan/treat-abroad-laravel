<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use http\Env\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.settings.index');
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
        //
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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


    public function setKey(Request $request)
    {
        $key = $request->get("key");
        $value = $request->get("value");

//        return [$key => $value];
        Setting::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );

        return response()->json([
            "message" => "success",
            "data" => [

            ]
        ]);
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

    public function updateSiteBanner(Request $request)
    {
        $image = time() . "-site-banner.jpg";

        //        return request()->get("x");
        $request
            ->file("site_banner")
            ?->storeAs("images", $image);


        Setting::updateOrCreate(
            ['key' => "homepage_banner_image"],
            ['value' => $image]
        );

        return response()->json([
            "message" => "success"
        ]);
    }


    public function aboutus(): View
    {
        $content = Setting::key("aboutus_page_content");
        return view('admin.aboutus.index', [
            "content" => $content
        ]);
    }

    public function updateAboutUsPage(Request $request): mixed
    {
        Setting::where("key", "aboutus_page_content")
                ->first()
                ->update([
                    "value" => $request->get("content")
                ]);
        return redirect()->route('admin.aboutus.index');
    }
}
