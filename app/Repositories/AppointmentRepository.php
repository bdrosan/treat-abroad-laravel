<?php

namespace App\Repositories;

use App\Models\Appointment;
use App\Models\User;

class AppointmentRepository
{

    /**
     * @return Appointment
     * @desc creates a new Appointment
     */
    public function createAppointment(array $data): Appointment
    {
        return Appointment::create($data);
    }

    public function deleteAppointment(int $appointmentId): void
    {
        Appointment::destroy($appointmentId);
    }
}