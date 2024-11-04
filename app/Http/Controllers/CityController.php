<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\City;
use App\Models\Country;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cityQuery = City::query();
        if ( request()->exists('country_id') && request()->get('country_id') != 0 ) {
            $cityQuery->where('country_id', request()->country_id);
        }
        $cities = $cityQuery
            ->has("doctors")
            ->with("doctors")
            ->get();
        $countries = Country::whereHas("cities", function ($query) {
                                $query->has("doctors");
                            })
                            ->get();

//        dd($cities);

        return view('city.index', [
            'cities' => $cities,
            "countries" => $countries,
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
    public function store(StoreCityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCityRequest $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
    }
}
