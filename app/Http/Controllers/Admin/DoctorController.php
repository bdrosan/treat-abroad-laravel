<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\DoctorLanguage;
use App\Models\Hospital;
use App\Models\Language;
use App\Models\Speciality;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Contracts\View\View|Application
    {
        $cities = City::has("doctors")->with("doctors")->get();

        $countries = Country::all();
        $specialities = Speciality::has("doctors")
            ->with("doctors")
            ->orderBy("name")
            ->get();

        $doctorQuery = Doctor::query();

        if (request()->exists('city_id') && request()->get('city_id') != -1) {
            $doctorQuery->where('city_id', request()->get('city_id'));
        }
        if (request()->get('speciality_id') && request()->get('speciality_id') != -1) {
            $speciality_id = request()->get('speciality_id');
            $doctorQuery->whereHas('specialities', function ($query) use ($speciality_id) {
                $query->where('specialties.id', $speciality_id);
            });
        }

        $doctors = $doctorQuery->paginate(10);

        //dd($doctors->links());
        return view('admin.doctors.index', [
            'doctors' => $doctors,
            'cities' => $cities,
            'countries' => $countries,
            'specialities' => $specialities,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorRequest $request)
    {

        $image = time() . "-doctor.jpg";
        $request
            ->file("profile_picture")
            ->storeAs("images", $image);

        // check if working hour field id valid JSON
        if (json_decode($request->get("working_hours"))) {
            $working_hours = $request->get("working_hours");
        } else {
            $working_hours = "{}";
        }

        $doctor = Doctor::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "slug" => $request->qualification . "-" . $request->firstname . "-" . $request->lastname . "-" . time(),
            "profile_picture" => $image,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "license_number" => $request->license_number,
            "qualification" => $request->qualification,
            "experience_years" => $request->experience_years,
            "address" => $request->address,
            "dob" => $request->dob,
            "gender" => $request->gender,
            "nationality" => $request->nationality,
            "consultation_fee" => $request->consultation_fee,
            "bio" => $request->bio,
            "working_hours" => $working_hours,

            "city_id" => $request->city_id,
        ]);

        collect($request->languages_spoken)
            ->each(function ($language) use ($doctor) {
                DoctorLanguage::create([
                    "language_id" => $language,
                    "doctor_id" => $doctor->id,
                ]);
            });

        $doctor
            ->hospitals()
            ->attach($request->get("hospital_ids"));


        return redirect()->route("admin.doctors.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $countries = Country::all();
        $languages = Language::all();
        $specialities = Speciality::all();
        $hospitals = Hospital::all();
        return view('admin.doctors.create', [
            "cities" => $cities,
            "countries" => $countries,
            "languages" => $languages,
            "specialities" => $specialities,
            "hospitals" => $hospitals
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $doctorId): \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Contracts\View\View|Application
    {
        $doctor = Doctor::where("id", $doctorId)
            ->with(["city.country", "specialities"])
            ->first();

        return view('admin.doctors.show', [
            'doctor' => $doctor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Contracts\View\View|Application
    {
        $doctor = Doctor::find($id);
        $cities = City::all();
        $countries = Country::all();
        $languages = Language::all();
        $specialities = Speciality::all();
        return view('admin.doctors.edit', [
            'doctor' => $doctor,
            'cities' => $cities,
            'countries' => $countries,
            'specialities' => $specialities,
            'languages' => $languages,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, string $id)
    {

        $doctor = Doctor::find($id);
        $doctor->update([
            "firstname" => $request->firstname ?? $doctor->firstname,
            "lastname" => $request->lastname ?? $doctor->lastname,
            "email" => $request->email ?? $doctor->email,
            "phone_number" => $request->phone_number ?? $doctor->phone_number,
            "license_number" => $request->license_number ?? $doctor->license_number,
            "qualification" => $request->qualification ?? $doctor->qualification,
            "experience_years" => $request->experience_years ?? $doctor->experience_years,
            "address" => $request->address ?? $doctor->address,
            "dob" => $request->dob ?? $doctor->dob,
            "gender" => $request->gender ?? $doctor->gender,
            "nationality" => $request->nationality ?? $doctor->nationality,
            "consultation_fee" => $request->consultation_fee ?? $doctor->consultation_fee,
            "bio" => $request->bio ?? $doctor->bio,
            "working_hours" => $request->working_hours ?? $doctor->working_hours,

            "city_id" => $request->city_id ?? $doctor->city_id,
        ]);

//        dd($request->all());

        $doctor->languages()->sync($request->languages_spoken);
        $doctor->specialities()->sync($request->speciality_ids);

//        collect($request->languages_spoken)
//            ->each(function ($language) use ($doctor) {
//                DoctorLanguage::create([
//                    "language_id" => $language,
//                    "doctor_id" => $doctor->id,
//                ]);
//            });


        return redirect()->route("admin.doctors.show", $doctor->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect()->route("admin.doctors.index");
    }
}
