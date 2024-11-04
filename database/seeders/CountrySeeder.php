<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $data = File::get("/home/shuvo/Desktop/code/_Job_/Shebaru IT/TreatAbroad/database/seeders/data/countries+cities.json");;
        // $data = json_decode($data);
        // foreach ($data as $country) {
        //     try {
        //         $countryName = $country->name;
        //         $cities = $country->cities;
        //         $country = Country::create([
        //             "name" => $countryName
        //         ]);
        //         foreach ($cities as $city) {
        //             $cityName = $city->name;
        //             City::create([
        //                 "name" => $cityName,
        //                 "country_id" => $country->id
        //             ]);
        //         }
        //     } catch (\Throwable $th) {
        //         continue;
        //     }
        // }


        // - BD
        $country = Country::create([
            "name" => "bangladesh",
            "icon_symbol" => "🇧🇩"
        ]);
        City::create([
            "name" => "dhaka",
            "country_id" => $country->id
        ]);
        City::create([
            "name" => "chittagong",
            "country_id" => $country->id
        ]);

        // - malaysia
        $malaysia = Country::create([
            "name" => "malaysia",
            "icon_symbol" => "🇲🇾"
        ]);
        City::create([
            "name" => "Kuala Lumpur",
            "country_id" => $malaysia->id
        ]);
        City::create([
            "name" => "Petaling Jaya",
            "country_id" => $malaysia->id
        ]);

        // - singapore
        $singapore = Country::create([
            "name" => "singapore",
            "icon_symbol" => "🇸🇬"
        ]);
        City::create([
            "name" => "Jurong East",
            "country_id" => $singapore->id
        ]);
        City::create([
            "name" => "singapore city",
            "country_id" => $singapore->id
        ]);

        // - india
        $india = Country::create([
            "name" => "india",
            "icon_symbol" => "🇮🇳"
        ]);
        City::create([
            "name" => "delhi",
            "country_id" => $india->id
        ]);
        City::create([
            "name" => "chennai",
            "country_id" => $india->id
        ]);
        City::create([
            "name" => "kolkata",
            "country_id" => $india->id
        ]);

        // - thailand
        $thailand = Country::create([
            "name" => "thailand",
            "icon_symbol" => "🇹🇭"
        ]);
        City::create([
            "name" => "bangkok",
            "country_id" => $thailand->id
        ]);
        City::create([
            "name" => "pattaya",
            "country_id" => $thailand->id
        ]);
        City::create([
            "name" => "phuket",
            "country_id" => $thailand->id
        ]);
    }
}
