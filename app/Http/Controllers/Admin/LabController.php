<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lab;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|Factory|Application|\Illuminate\Contracts\Foundation\Application
    {
        $labs = Lab::paginate(10);
        return view('admin.labs.index', [
            "labs" => $labs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->exists("image")) {
            $image = time() . "-lab.jpg";
            $request
                ->file("image")
                ->storeAs("images", $image);
        }



        Lab::create([
            "name" => $request->get('name'),
            "description" => $request->get('description'),
            "image" => $image ?? null
        ]);

        return redirect()->route('admin.labs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.labs.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lab = Lab::find($id);
        return view('admin.labs.show', [
            "lab" => $lab
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lab = Lab::find($id);
        return view('admin.labs.edit', [
            "lab" => $lab
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->exists("image")) {
            $image = time() . "-lab.jpg";
            $request
                ->file("image")
                ->storeAs("images", $image);
        }

        $lab = Lab::find($id);
        $lab->update([
            "name" => $request->get('name') ?? $lab->name,
            "description" => $request->get('description') ?? $lab->description,
            "image" => $image ?? $lab->image,
        ]);

        return redirect()->route('admin.labs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Lab::destroy($id);
        return redirect()->route('admin.labs.index');
    }
}
