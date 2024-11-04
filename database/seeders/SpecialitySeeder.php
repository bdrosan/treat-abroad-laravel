<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialities = [
            "Cardiology",
            "Cardio thoracic",
            "Orthopedics",
            "Gastroenterology",
            "General Surgery",
            "Oncology",
            "Gynecology",
            "Pediatrics",
            "Neonatology",
            "Kidney Transplantation",
            "Liver Transplantation",
            "Pancreas Transplant",
            "Internal Medicine",
            "Plastic Surgery",
            "Urology",
            "Physiotherapy",
            "Psychiatry",
            "Pulmonology",
            "Dental",
            "ENT",
            "Emergency Medicine",
            "Rheumatology",
            "Vascular Surgery",
            "Neurology",
            "Ophthalmology",
            "Dermatology",
            "Endocrinology",
            "Anesthesiology",
            "Interventional Radiology",
            "Nephrology",
            "Critical Care",
            "Neurosurgery",
            "Organ Transplantation",
            "Robotic Surgery"
        ];
        foreach ($specialities as $speciality) {
            Speciality::create([
                "name" => $speciality
            ]);
        }
    }
}
