<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSpecialitiesRequest;
use App\Http\Requests\UpdateSpecialitiesRequest;
use App\Models\Speciality;
use Illuminate\View\View;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $specialities = Speciality::all();
        return view('speciality.index', [
            "specialities" => $specialities
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
    public function store(StoreSpecialitiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Speciality $specialities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speciality $specialities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpecialitiesRequest $request, Speciality $specialities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speciality $specialities)
    {
        //
    }
}
