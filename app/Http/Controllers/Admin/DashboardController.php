<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Blog;
use App\Models\City;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointmentsToday = Appointment::where("created_at", "<=", now())->get();
        $appointmentsThisWeek = Appointment::where("created_at", ">=", now()->week())->get();
        $appointmentsThisMonth = Appointment::where("created_at", ">=", now()->month())->get();
        return view('admin.dashboard.index', [
            'appointmentsToday' => $appointmentsToday,
            'appointmentsThisWeek' => $appointmentsThisWeek,
            'appointmentsThisMonth' => $appointmentsThisMonth,
            "doctors" => Doctor::all(),
            "hospitals" => Hospital::all(),
            "blogs" => Blog::all(),
            "countries" => Country::all(),
            "cities" => City::all(),
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
    public function store(Request $request)
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
