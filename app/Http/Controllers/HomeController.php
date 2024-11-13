<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Speciality;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $specialities = Speciality::has("doctors")
                                    ->with("doctors")
                                    ->orderBy("name")
                                    ->get();

        $cities = City::has("doctors")
                        ->with("doctors")
                        ->orderBy("name")
                        ->get();

        $countries = Country::has("doctors")
                        ->with("doctors")
                        ->orderBy("name")
                        ->get();

        $hospitals = Hospital::all();

        $doctors = Doctor::all();


        return view('home.index',[
            "specialities" => $specialities,
            "cities" => $cities,
            "hospitals" => $hospitals,
            "doctors" => $doctors,
            "countries" => $countries
        ]);
    }


    public function aboutUs()
    {
        return view('aboutus.index');
    }
}
