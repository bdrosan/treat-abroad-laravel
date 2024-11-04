<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::factory()
            ->count(61)
            ->create();


        // seeding relations
        $specialities = Speciality::all();
        $doctors = Doctor::all();
        foreach ($doctors as $doctor) {
            $spIds = $specialities
                        ->random(rand(1, 3))
                        ->map(function ($speciality) {
                            return $speciality->id;
                        });
            $doctor->specialities()->sync($spIds);
        }
    }
}
