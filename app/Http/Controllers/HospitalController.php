<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHospitalRequest;
use App\Http\Requests\UpdateHospitalRequest;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\Hospital;
use GuzzleHttp\Psr7\Request;
use Illuminate\View\View;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        if ( request()->exists("country_id") )
        {
            $hospitals = Hospital::whereHas("city", function ($city) {
                $city->where("country_id", request()->country_id);
            })->get();
        }
        else
        {
            $hospitals = Hospital::all();
        }
        $malaysia = Country::where('name', "LIKE", '%Malaysia%')->get()->first();
        $bangladesh = Country::where('name', "LIKE", '%bangladesh%')->get()->first();
        $india = Country::where('name', "LIKE", '%india')->get()->first();
        $singapore = Country::where('name', "LIKE", '%singapore%')->get()->first();
        $thailand = Country::where('name', "LIKE", '%thailand%')->get()->first();
        return view('hospitals.index', [
            'hospitals' => $hospitals,
            'malaysia' => $malaysia,
            'india' => $india,
            'bangladesh' => $bangladesh,
            'singapore' => $singapore,
            'thailand' => $thailand
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
    public function store(StoreHospitalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $hospitalIdentifier)
    {

        $hospital = Hospital::whereOr("id", $hospitalIdentifier)
                            ->whereOr("slug", $hospitalIdentifier)
                            ->with(["city.country", "specialities"])
                            ->first();

        $doctors = $hospital
                    ->doctors
                    ->sortByDesc("experience_years");


        if (!$hospital) {
            return redirect()->route('hospitals.index');
        }

        return view('hospitals.show', [
            'hospital' => $hospital,
            "doctors" => $doctors,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHospitalRequest $request, Hospital $hospital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hospital $hospital)
    {
        //
    }
}
