<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Jobs\SendWhatsappMessageJob;
use App\Models\Appointment;
use App\Models\City;
use App\Models\Speciality;
use App\Services\AppointmentService;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $specialities = Speciality::all();
        return view('appointments.index', [
            'cities' => City::all(),
            'specialities' => $specialities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentRequest $request, AppointmentService $appointmentService)
    {
        $data = $request->validated();
        if ( Auth::check() ) {
            $data['user_id'] = auth()->id();
        }
        $appointmentService->createAppointment($data);

        // dispatch whatsapp sms job
//        Event::dispatch();
        $whatsappMessageData = "
            'firstname': {$data["firstname"]},
            'lastname': {$data["lastname"]}
            'email': {$data["email"]}
            'phone': {$data["phone"]}
            'dob': {$data["dob"]}
        ";
        SendWhatsappMessageJob::dispatch($whatsappMessageData, null, "+8801924901115");

        return redirect()->route('appointments.book.success');
    }
    public function success(): View
    {
        return view('appointments.success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
