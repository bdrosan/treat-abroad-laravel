<?php

namespace App\Http\Controllers\Seeder;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDoctorRequest;
use App\Models\City;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\DoctorLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DoctorSeederController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Log::info($request->all());
        if ($request->hasFile("profile_picture")) {
            $image = time() . "-doctor.jpg";
            $request
                ->file("profile_picture")
                ->storeAs("images", $image);
        }
        if ($request->exists("profile_picture_base64")) {
            $image = time() . "-doctor.jpg";
            $imageData = str_replace('data:image/png;base64,', '', $request->profile_picture_base64);
            $imageData = str_replace(' ', '+', $imageData);
            $imageData = base64_decode($imageData);
            // Save the image file
            Storage::disk("public")->put("images/" . $image, $imageData);
        }

        // check if working hour field id valid JSON
        if (json_decode($request->get("working_hours"))) {
            $working_hours = $request->get("working_hours");
        } else {
            $working_hours = "{}";
        }

        $department = $request->get("department");
        $department = Department::where("name", "LIKE", "%$department%")->first();

        $departmentName = strtolower($request->get("department"));
        if (!$department) {
            $department = Department::create([
                "name" => $departmentName,
                "slug" => Str::slug($departmentName),
            ]);
        }

        $city = $request->get("city");
        $city = City::where("name", "LIKE", "%$city%")->first();



        $doctor = Doctor::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "slug" => $request->qualification . "-" . $request->firstname . "-" . $request->lastname . "-" . time(),
            "profile_picture" => $image ?? "default_doctor_avatar.png",
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

                "city_id" => $city->id,
            "department_id" => $department->id
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
            ->attach([$request->get("hospital_id")]);

        $doctor
            ->specialities()
            ->attach($request->speciality_ids);


        return redirect()->route("admin.doctors.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
}
