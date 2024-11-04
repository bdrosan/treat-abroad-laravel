<?php

namespace Database\Seeders;

use App\Models\Lab;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labs = [
            "Clinical Chemistry Lab" => "Analyzes blood and body fluids to detect chemical components.",
            "Hematology Lab" => "Studies blood and its disorders, including cell counts and coagulation.",
            "Microbiology Lab" => "Identifies and analyzes microorganisms, including bacteria and fungi.",
            "Pathology Lab" => "Examines tissues and cells to diagnose diseases.",
            "Immunology Lab" => "Focuses on the immune system and its related disorders.",
            "Blood Bank (Transfusion Medicine)" => "Handles blood products for transfusions and ensures safety.",
            "Toxicology Lab" => "Tests for toxic substances in biological samples.",
            "Molecular Diagnostics Lab" => "Utilizes molecular biology techniques for disease diagnosis.",
            "Genetics Lab" => "Analyzes genetic material to identify inherited disorders.",
            "Serology Lab" => "Tests blood serum for antibodies and antigens.",
            "Histology Lab" => "Prepares and examines tissue samples for disease diagnosis.",
            "Cytology Lab" => "Studies cells from various body fluids to detect abnormalities.",
            "Urinalysis Lab" => "Analyzes urine samples to diagnose health conditions.",
            "Phlebotomy Lab" => "Handles blood sample collection and processing.",
            "Radiology Lab" => "Uses imaging techniques to diagnose and monitor diseases.",
            "Nuclear Medicine Lab" => "Uses radioactive materials for diagnosis and treatment.",
            "Electrophysiology Lab" => "Studies electrical activity in the heart and nervous system.",
            "Cardiology Lab (Cardiac Cath Lab)" => "Performs invasive tests and procedures on the heart.",
            "Endocrinology Lab" => "Tests hormones and endocrine system functions.",
            "Dermatopathology Lab" => "Examines skin samples to diagnose skin diseases.",
            "Bacteriology Lab" => "Specifically focuses on the study of bacteria.",
            "Virology Lab" => "Identifies and analyzes viruses and viral infections.",
            "Parasitology Lab" => "Studies parasites and parasitic diseases.",
            "Fungal Culture Lab" => "Cultivates and identifies fungi from clinical samples.",
            "Clinical Trial Lab" => "Conducts laboratory tests for clinical research studies.",
            "Point-of-Care Testing Lab" => "Provides immediate test results at the site of patient care.",
            "Advanced Imaging Lab" => "Utilizes advanced imaging techniques like MRI and CT scans.",
            "Sleep Study Lab (Polysomnography)" => "Monitors patients' sleep patterns for sleep disorders.",
            "Neurophysiology Lab" => "Studies the nervous system's functions through various tests.",
            "Cytogenetics Lab" => "Analyzes chromosomes for genetic abnormalities.",
            "Reproductive Lab (Andrology and IVF)" => "Focuses on reproductive health and fertility treatments.",
            "Nutrition Lab (Dietetic Services)" => "Assesses nutritional needs and dietary planning.",
            "Pediatric Lab" => "Provides lab services tailored for children's health.",
            "Veterinary Lab (for animal studies)" => "Conducts lab tests and research related to animal health.",
            "Orthopedic Lab (for joint studies)" => "Studies musculoskeletal disorders and injuries.",
            "Oncology Lab (for cancer diagnostics)" => "Focuses on diagnosing and monitoring cancer.",
            "Gastroenterology Lab" => "Analyzes digestive system issues and disorders.",
            "Pulmonary Function Lab" => "Tests lung function and respiratory health.",
            "Audiology Lab" => "Conducts hearing tests and assessments.",
            "Physical Therapy Lab" => "Provides therapy and rehabilitation for physical injuries.",
            "Radiation Oncology Lab" => "Delivers radiation treatment for cancer patients.",
            "Infectious Disease Lab" => "Focuses on diagnosing and managing infectious diseases.",
            "Chronic Disease Management Lab" => "Monitors and manages chronic health conditions.",
            "Emergency Lab" => "Provides rapid testing and results for emergency cases.",
            "Quality Control Lab" => "Ensures lab tests meet quality standards and regulations.",
            "Research Lab (for clinical research)" => "Conducts experiments and studies for medical advancements.",
            "Pharmacogenomics Lab" => "Studies how genes affect individual responses to drugs.",
            "Bioinformatics Lab" => "Utilizes software and tools to analyze biological data.",
            "Health Informatics Lab" => "Focuses on the management of health information systems.",
            "Laboratory Information System (LIS) Lab" => "Manages data and processes within the laboratory."
        ];

        foreach ($labs as $name => $description) {
            Lab::create([
                "name" => $name,
                "description" => $description
            ]);
        }
    }
}
