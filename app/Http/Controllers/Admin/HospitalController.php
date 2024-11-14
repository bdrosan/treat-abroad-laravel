<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Hospital;
use App\Models\Lab;
use App\Models\Speciality;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospitals = Hospital::with(["city"])
                            ->orderBy("id", "desc")
                            ->paginate(10);
        return view('admin.hospitals.index', [
            'hospitals' => $hospitals
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->exists("picture")) {
            $image = time() . "-hospital.jpg";
            $request
                ->file("picture")
                ?->storeAs("images", $image);
        }

        $hospital = Hospital::create([
            "name" => $request->get("name"),
            "slug" => $this->makeSlug($request->get("name")),
            "image" => $image ?? "default_hospital_avatar.png",
            "address" => $request->get("address", ""),
            "moto" => $request->get("moto", ""),
            "state" => $request->get("state", null),
            "zipcode" => $request->get("zipcode", null),
            "phone" => $request->get("phone", null),
            "city_id" => $request->get("city_id", null),
            "type" => $request->get("type") ?? "General",
        ]);


        $hospital->specialities()->attach($request->get("speciality_ids", []));
        $hospital->labs()->attach($request->get("lab_ids", []));

        return redirect()->route('admin.hospitals.index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $labs = Lab::all();
        $specialities = Speciality::all();
        return view('admin.hospitals.create', [
            'cities' => $cities,
            'labs' => $labs,
            'specialities' => $specialities
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.hospitals.show', [
            'hospital' => Hospital::with(["city"])->find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hospital = Hospital::with(["city"])->findOrFail($id);
        $cities = City::all();
        $specialities = Speciality::all();
        $labs = Lab::all();
        return view('admin.hospitals.edit', [
            'hospital' => $hospital,
            "cities" => $cities,
            "labs" => $labs,
            "specialities" => $specialities
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hospital = Hospital::find($id);

        if ($request->exists("picture")) {
            $image = time() . "-hospital.jpg";
            $request
                ->file("picture")
                ?->storeAs("images", $image);
        }

        $hospital->update([
            "name" => $request->get("name") ?? $hospital->name,
            "slug" => $this->makeSlug($request->get("name")),
            "image" => $image ?? $hospital->image,
            "address" => $request->get("address") ?? $hospital->address,
            "moto" => $request->get("moto") ?? $hospital->moto,
            "state" => $request->get("state", null) ?? $hospital->state,
            "zipcode" => $request->get("zipcode") ?? $hospital->zipcode,
            "phone" => $request->get("phone") ?? $hospital->phone,
            "city_id" => $request->get("city_id") ?? $hospital->city_id,
            "item_in_homepage_slider" => $request->get("item_in_homepage_slider", $hospital->homepage_show_slide)
        ]);



        $hospital->specialities()->attach($request->get("speciality_ids", []));
        $hospital->labs()->attach($request->get("lab_ids", []));


        return redirect()->route("admin.hospitals.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Hospital::find($id)?->delete();

        return redirect()->route('admin.hospitals.index');
    }

    public function makeSlug(string $title, string $type = "", string $city = ""): string
    {
        $slug = Str::slug($title);

        $h = Hospital::where("slug", $slug)->first();
        if ( $h ) {
            $slug = $slug . "-" . time();
        }

        return $slug;
    }

}
