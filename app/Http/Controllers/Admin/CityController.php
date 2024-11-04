<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Tools\ObjectInspector;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ObjectInspector $inspector)
    {
        $cities = City::orderBy("country_id", "desc")
                        ->paginate(10);
        return view('admin.city.index', [
            'cities' => $cities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->exists("image")) {
            $image = time() . "-city.jpg";
            $request
                ->file("picture")
                ?->storeAs("images", $image);
        }

        City::create([
            "name" => $request->get('name'),
            "image" => $image ?? "default-city-image.jpg",
            "code" => $request->get('code'),
            "country_id" => $request->get('country_id'),
        ]);

        return redirect()->route('admin.cities.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.city.create',[
            "countries" => Country::all()
        ]);
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
        return view('admin.city.edit', [
            "city" => City::find($id),
            "countries" => Country::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->exists("image")) {
            $image = time() . "-city.jpg";
            $request
                ->file("picture")
                ?->storeAs("images", $image);
        }

        $city = City::find($id);

        $city->update([
            "name" => $request->get('name') ?? $city,
            "image" => $image ?? $city->image,
            "code" => $request->get('code') ?? $city->code,
            "country_id" => $request->get('country_id') ?? $city->country_id,
        ]);

        return redirect()->route('admin.cities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        City::destroy($id);

        return redirect()->route('admin.cities.index');
    }
}
