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
        $hospitals = Hospital::with(["city"])->paginate(10);
        return view('admin.hospitals.index', [
            'hospitals' => $hospitals
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
//        dd($request->all());
        $city = City::find($request->get("city_id"));
        $image = time() . "-hospital.jpg";
        $request
            ->file("picture")
            ?->storeAs("images", $image);

        $hospital = Hospital::create([
            "name" => $request->get("name"),
            "slug" => Str::slug($request->get("name")) . "-" . $request->get("type", "General") . "-" . $city->name,
            "image" => $image,
            "address" => $request->get("address"),
            "moto" => $request->get("moto"),
            "state" => $request->get("state", null),
            "zipcode" => $request->get("zipcode"),
            "phone" => $request->get("phone"),
            "city_id" => $request->get("city_id"),
            "type" => $request->get("type") ?? "General",
        ]);


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
        $city = City::find($request->get("city_id"));
        if ($request->exists("image")) {
            $image = time() . "-hospital.jpg";
            $request
                ->file("picture")
                ?->storeAs("images", $image);
        }

        Hospital::create([
            "name" => $request->get("name") ?? $hospital->name,
            "slug" => Str::slug($request->get("name")) . "-" . $city->name,
            "image" => $image ?? $hospital->image,
            "address" => $request->get("address") ?? $hospital->address,
            "moto" => $request->get("moto") ?? $hospital->moto,
            "state" => $request->get("state", null) ?? $hospital->state,
            "zipcode" => $request->get("zipcode") ?? $hospital->zipcode,
            "phone" => $request->get("phone") ?? $hospital->phone,
            "city_id" => $request->get("city_id") ?? $hospital->city_id,
        ]);

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
}
