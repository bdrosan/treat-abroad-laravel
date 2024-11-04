<?php

namespace App\Services;

use App\Models\Appointment;
use App\Repositories\AppointmentRepository;

/**
 * Class AppointmentService.
 */
class AppointmentService
{
    private AppointmentRepository $appointmentRepository;
    public function __construct() {
        $this->appointmentRepository = new AppointmentRepository();
    }
    public function createAppointment(array $data): Appointment
    {
        return $this->appointmentRepository->createAppointment($data);
    }
    public function deleteAppointment(int $appointmentId): void
    {
        $this->appointmentRepository->deleteAppointment($appointmentId);
    }

}
