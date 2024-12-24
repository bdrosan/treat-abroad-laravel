<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateDiagnosticCenterRequest;
use App\Models\DiagnosticCenter;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiagnosticCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagnosticCenters = DiagnosticCenter::paginate(10);
        return view('diagnostic-center.index', [
            'diagnosticCenters' => $diagnosticCenters
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
        $image = time() . "-diagnostic-center.jpg";
        $request
            ->file("image")
            ?->storeAs("images", $image);

        DiagnosticCenter::create([
            "name" => $request->get("name"),
            "image" => $image,
            "slug" => Str::slug($request->get("name")),
            "details" => $request->get("details"),
        ]);

        return redirect()->route("admin.diagnostic-center.index");
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dc = DiagnosticCenter::find($id);

        return view("diagnostic-center.show",[
            "dc" => $dc
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DiagnosticCenter $diagnosticCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiagnosticCenterRequest $request, DiagnosticCenter $diagnosticCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DiagnosticCenter $diagnosticCenter)
    {
        //
    }
}
