<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\Language;
use App\Models\Speciality;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Contracts\View\View|Application
    {
        $cities = City::has("doctors")
                        ->with("doctors")
                        ->get();

        $countries = Country::all();
        $specialities = Speciality::has("doctors")
                                    ->with("doctors")
                                    ->orderBy("name")
                                    ->get();

        $languages = Language::with(["doctors"])->get();

        $doctorQuery = Doctor::query();

        if ( request()->exists('gender') && request()->get('gender') != "all" ) {
            $doctorQuery->where('gender', request()->get('gender') );
        }
        if ( request()->exists('country_id') && request()->get('country_id') != -1 ) {
            $doctorQuery->whereHas('city', function ($cityQuery) {
                $cityQuery->where('country_id', request()->get('country_id'));
            });
        }
        if ( request()->get('speciality_id') && request()->get('speciality_id') != -1 ) {
            $speciality_id = request()->get('speciality_id');
            $doctorQuery->whereHas('specialities', function ($query) use ($speciality_id) {
                $query->where('specialties.id', $speciality_id);
            });
        }
        if ( request()->exists('language_id') && request()->get('language_id') != -1 ) {
            $language_id = request()->get('language_id');
            $doctorQuery->whereHas('languages', function ($query) use ($language_id) {
                $query->where('languages.id', $language_id);
            });
        }

        $doctors = $doctorQuery->get();

        return view('doctors.index', [
            'doctors' => $doctors,
            'cities' => $cities,
            'countries' => $countries,
            'specialities' => $specialities,
            "languages" => $languages
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
    public function store(StoreDoctorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $doctorIdentifier): View
    {
        $doctor = Doctor::whereOr("id", $doctorIdentifier)
                        ->whereOr("slug", $doctorIdentifier)
                        ->with(["city.country", "specialities"])
                        ->first();

        return view('doctors.show', [
            'doctor' => $doctor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor): View
    {
        return view('doctors.edit', [
            'doctor' => $doctor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
