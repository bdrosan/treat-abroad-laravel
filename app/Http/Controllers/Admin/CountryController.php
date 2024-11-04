<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $countries = Country::paginate(10);
        return view('admin.country.index', [
            'countries' => $countries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.country.create', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Country::create([
            "name" => $request->get('name'),
            "icon_markup" => $request->get('icon_markup'),
            "icon_symbol" => $request->get('icon_symbol'),
        ]);
        return redirect()->route('admin.countries.index');
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
        return view('admin.country.edit', [
            "country" => Country::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $country = Country::find($id);
        $country->update([
            "name" => $request->get('name') ?? $country->name,
            "icon_markup" => $request->get('icon_markup') ?? $country->icon_markup,
            "icon_symbol" => $request->get('icon_symbol') ?? $country->icon_symbol,
        ]);
        return redirect()->route('admin.countries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Country::destroy($id);

        return redirect()->route('admin.countries.index');
    }
}
