<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Jobs\SendWhatsappMessageJob;
use App\Models\Appointment;
use App\Models\City;
use App\Models\Speciality;
use App\Services\AppointmentService;
use Barryvdh\DomPDF\Facade\Pdf;
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
        $appointment = $appointmentService->createAppointment($data);

        // dispatch whatsapp sms job
//        Event::dispatch();
        $whatsappMessageData = "
            'name': {$data["name"]},
            'email': {$data["email"]}
            'phone': {$data["phone"]}
            'age': {$data["age"]}
        ";
        SendWhatsappMessageJob::dispatch($whatsappMessageData, null, "+8801924901115");

        return redirect()->route('appointments.book.success', ['id' => $appointment->id]);
    }
    public function success(): View
    {
        $appointment = Appointment::find(request()->get("id"));
        return view('appointments.success', [
            "appointment" => $appointment
        ]);
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

    public function downloadAppointmentReceipt(string $id)
    {

        $appointment = Appointment::find($id);

        $pdf = Pdf::loadView('appointments.receipt', ['appointment' => $appointment]);

        return $pdf->download("Appointments Receipt #" . $appointment->id . ".pdf");
    }
}
