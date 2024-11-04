<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Language::factory(10)->create();
//        $data = File::get("/home/shuvo/Desktop/code/_Job_/Shebaru IT/TreatAbroad/database/seeders/data/languages.json");;
//        $data = json_decode($data);
//        foreach ($data as $language) {
//            try {
//                $languageName = $language->name;
//                $country = Language::create([
//                    "name" => $languageName - $language->name_in_script
//                ]);
//            } catch (\Throwable $th) {
//                continue;
//            }
//        }
    }
}
