<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::paginate(10);
        return view('admin.department.index', [
            "departments" => $departments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = time() . "-department.jpg";
        $request
            ->file("image")
            ?->storeAs("images", $image);

        Department::create([
            "name" => $request->get("name"),
            "image" => $image,
            "slug" => Str::slug($request->get("name")),
            "details" => $request->get("details"),
        ]);

        return redirect()->route("admin.departments.index");
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
        $department = Department::find($id);
        return view('admin.department.edit', [
            "department" => $department
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile("image")) {
            $image = time() . "-department.jpg";
            $request
                ->file("image")
                ?->storeAs("images", $image);
        }

        $department = Department::find($id);

        $department->update([
            "name" => $request->get("name") ?? $department->name,
            "image" => $image ?? $department->image,
            "details" => $request->get("details") ?? $department->details,
        ]);

        return redirect()->route("admin.departments.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Department::destroy($id);

        return redirect()->route("admin.departments.index");
    }
}
