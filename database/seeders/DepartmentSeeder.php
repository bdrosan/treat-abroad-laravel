<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Accident Emergency',
            'Anaesthesia and Pain Medicine',
            'Cancer Care Centre',
            'Cardiac Electrophysiology',
            'Heart Failure and Interventional Cardiology',
            'Cardiology',
            'Cardiothoracic and Vascular Surgery',
            'Cardiothoracic Anaesthesia',
            'Child Development Centre',
            'Counsellor',
            'Critical Care',
            'Dental and Maxillofacial Surgery',
            'Dermatology and Venereology',
            'Diabetology and Endocrinology',
            'Diagnostic and Interventional Radiology',
            'Dietetics and Nutrition',
            'ENT and Head Neck Surgery',
            'Fertility Centre',
            'Gastroenterology and Hepatology',
            'General and Lap Surgery',
            'Haematology and Stem Cell Transplant',
            'Hip Centre',
            'Internal Medicine',
            'Joint Care and Wellness Centre',
            'Kidney Transplant Program',
            'Lab Medicine',
            'Medical Oncology',
            'Neonatology',
            'Nephrology',
            'Neurology',
            'Neurosurgery',
            'Nuclear Medicine',
            'Obstetrics and Gynaecology',
            'Oncoplastic and Reconstructive Breast Surgery',
            'Ophthalmology',
            'Orthopaedics',
            'Paediatric Cardiology',
            'Paediatric Surgery and Paediatric Urology',
            'Paediatrics',
            'Paediatrics and Neonatology',
            'Physical Medicine and Rehabilitation',
            'Plastic, Reconstructive and Cosmetic Surgery',
            'Psychiatry',
            'Radiation Oncology',
            'Respiratory Medicine',
            'Rheumatology',
            'Thyroid and Head-Neck Oncosurgery',
            'Transfusion Medicine',
            'Urology',
        ];
        foreach ($departments as $department) {
            Department::create(['name' => $department]);
        }
    }
}
