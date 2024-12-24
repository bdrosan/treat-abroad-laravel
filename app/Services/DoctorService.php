<?php

namespace App\Services;

use App\Models\Doctor;
use App\Models\Hospital;

class DoctorService
{
    public function getTopDoctors()
    {
        $doctors = Doctor::take(10)->get();
        return $doctors;
    }
    public function getTopHospitals()
    {
        $hospitals = Hospital::take(10)->get();
        return $hospitals;
    }
}