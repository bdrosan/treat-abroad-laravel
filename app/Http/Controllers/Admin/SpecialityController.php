<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $specialities = Speciality::paginate(10);
        return view('admin.speciality.index', [
            'specialities' => $specialities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = time() . "-speciality.jpg";
        $request
            ->file("image")
            ?->storeAs("images", $image);

        Speciality::create([
            "name" => $request->get("name"),
            "image" => $image,
            "slug" => Str::slug($request->get("name")),
            "details" => $request->get("details"),
        ]);

        return redirect()->route("admin.specialities.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.speciality.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $speciality = Speciality::find($id);
        return view('admin.speciality.show', [
            'speciality' => $speciality
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $speciality = Speciality::find($id);
        return view('admin.speciality.edit', [
            "speciality" => $speciality
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile("image")) {
            $image = time() . "-speciality.jpg";
            $request
                ->file("image")
                ?->storeAs("images", $image);
        }

        $speciality = Speciality::find($id);

        $speciality->update([
            "name" => $request->get("name") ?? $speciality->name,
            "image" => $image ?? $speciality->image,
            "details" => $request->get("details") ?? $speciality->details,
        ]);

        return redirect()->route("admin.specialities.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Speciality::destroy($id);

        return redirect()->route("admin.specialities.index");
    }
}
