<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\Hospital;
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

        $hospitals = Hospital::with(["doctors"])->get();

        $doctorQuery = Doctor::query();

        if (request()->exists('gender') && request()->get('gender') != "all") {
            $doctorQuery->where('gender', request()->get('gender'));
        }
        if (request()->exists('country_id') && request()->get('country_id') != -1) {
            $doctorQuery->whereHas('city', function ($cityQuery) {
                $cityQuery->where('country_id', request()->get('country_id'));
            });
        }
        if (request()->exists('department_id') && request()->get('department_id') != -1) {
            $department_id = request()->get('department_id');
            $doctorQuery->whereHas('department', function ($query) use ($department_id) {
                $query->where('department_id', $department_id);
            });
        }
        if (request()->exists('hospital_id') && request()->get('hospital_id') != -1) {
            $hospital_id = request()->get('hospital_id');
            $doctorQuery->whereHas('hospitals', function ($query) use ($hospital_id) {
                $query->where('hospitals.id', $hospital_id);
            });
        }

        $doctors = $doctorQuery->with('hospitals')->paginate(20);

        return view('doctors.index', [
            'doctors' => $doctors,
            'cities' => $cities,
            'countries' => $countries,
            'specialities' => $specialities,
            "hospitals" => $hospitals
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
    public function show(string $id): View
    {
        //        dd($id);
        $doctor = Doctor::whereOr("id", $id)
            ->where("slug", $id)
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
