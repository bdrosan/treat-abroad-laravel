<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DiagnosticCenterController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\LabController;
use App\Http\Controllers\Admin\MainSliderController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SpecialityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seeder\DoctorSeederController;


Route::get("/admin/login", [AuthController::class, "loginPage"])->name("admin.login");
Route::post("/admin/login", [AuthController::class, "login"])->name("admin.login.post");
Route::post("/admin/logout", [AuthController::class, "logout"])->name("admin.logout.post");

Route::group(['middleware' => [], "prefix" => "admin"], function () {
    // dashboard routes
    Route::get("/", [DashboardController::class, "index"])->name("admin.dashboard.index");

    // appointment routes
    Route::get("/appointments", [AppointmentController::class, "index"])->name("admin.appointments.index");
    Route::get("/appointments/show/{id}", [AppointmentController::class, "show"])->name("admin.appointments.show");

    // doctor management routes
    Route::get("/doctors", [DoctorController::class, "index"])->name("admin.doctors.index");
    Route::get("/doctors/create", [DoctorController::class, "create"])->name("admin.doctors.create");
    Route::get("/doctors/show/{id}", [DoctorController::class, "show"])->name("admin.doctors.show");
    Route::post("/doctors/store", [DoctorController::class, "store"])->name("admin.doctors.store");
    Route::post("/seed/doctors/store", [DoctorSeederController::class, "store"])->name("admin.seed.doctors.store");
    Route::get("/doctors/edit/{id}", [DoctorController::class, "edit"])->name("admin.doctors.edit");
    Route::post("/doctors/update/{id}", [DoctorController::class, "update"])->name("admin.doctors.update");
    Route::post("/doctors/destroy/{id}", [DoctorController::class, "destroy"])->name("admin.doctors.destroy");

    // hospitals management routes
    Route::get("/hospitals", [HospitalController::class, "index"])->name("admin.hospitals.index");
    Route::get("/hospitals/show/{id}", [HospitalController::class, "show"])->name("admin.hospitals.show");
    Route::get("/hospitals/create", [HospitalController::class, "create"])->name("admin.hospitals.create");
    Route::post("/hospitals/store", [HospitalController::class, "store"])->name("admin.hospitals.store");
    Route::get("/hospitals/edit/{id}", [HospitalController::class, "edit"])->name("admin.hospitals.edit");
    Route::post("/hospitals/update/{id}", [HospitalController::class, "update"])->name("admin.hospitals.update");
    Route::post("/hospitals/destroy/{id}", [HospitalController::class, "destroy"])->name("admin.hospitals.destroy");

    // Labs management routes
    Route::get("/labs", [LabController::class, "index"])->name("admin.labs.index");
    Route::get("/labs/show/{id}", [LabController::class, "show"])->name("admin.labs.show");
    Route::get("/labs/create", [LabController::class, "create"])->name("admin.labs.create");
    Route::post("/labs/store", [LabController::class, "store"])->name("admin.labs.store");
    Route::get("/labs/edit/{id}", [LabController::class, "edit"])->name("admin.labs.edit");
    Route::post("/labs/update/{id}", [LabController::class, "update"])->name("admin.labs.update");
    Route::post("/labs/destroy/{id}", [LabController::class, "destroy"])->name("admin.labs.destroy");


    // Speciality management routes
    Route::get("/speciality", [SpecialityController::class, "index"])->name("admin.specialities.index");
    Route::get("/speciality/show/{id}", [SpecialityController::class, "show"])->name("admin.specialities.show");
    Route::get("/speciality/create", [SpecialityController::class, "create"])->name("admin.specialities.create");
    Route::post("/speciality/store", [SpecialityController::class, "store"])->name("admin.specialities.store");
    Route::get("/speciality/edit/{id}", [SpecialityController::class, "edit"])->name("admin.specialities.edit");
    Route::post("/speciality/update/{id}", [SpecialityController::class, "update"])->name("admin.specialities.update");
    Route::get("/speciality/destroy/{id}", [SpecialityController::class, "destroy"])->name("admin.specialities.destroy");

    // Diagnostic Center management routes
    Route::get("/diagnostic-center", [DiagnosticCenterController::class, "index"])->name("admin.diagnostic-center.index");
    Route::get("/diagnostic-center/show/{id}", [DiagnosticCenterController::class, "show"])->name("admin.diagnostic-center.show");
    Route::get("/diagnostic-center/create", [DiagnosticCenterController::class, "create"])->name("admin.diagnostic-center.create");
    Route::post("/diagnostic-center/store", [DiagnosticCenterController::class, "store"])->name("admin.diagnostic-center.store");
    Route::get("/diagnostic-center/edit/{id}", [DiagnosticCenterController::class, "edit"])->name("admin.diagnostic-center.edit");
    Route::post("/diagnostic-center/update/{id}", [DiagnosticCenterController::class, "update"])->name("admin.diagnostic-center.update");
    Route::get("/diagnostic-center/destroy/{id}", [DiagnosticCenterController::class, "destroy"])->name("admin.diagnostic-center.destroy");

    // Services management routes
    Route::get("/services", [ServiceController::class, "index"])->name("admin.services.index");
    Route::get("/services/show/{id}", [ServiceController::class, "show"])->name("admin.services.show");
    Route::get("/services/create", [ServiceController::class, "create"])->name("admin.services.create");
    Route::post("/services/store", [ServiceController::class, "store"])->name("admin.services.store");
    Route::get("/services/edit/{id}", [ServiceController::class, "edit"])->name("admin.services.edit");
    Route::post("/services/update/{id}", [ServiceController::class, "update"])->name("admin.services.update");
    Route::get("/services/destroy/{id}", [ServiceController::class, "destroy"])->name("admin.services.destroy");

    // Department management routes
    Route::get("/departments", [DepartmentController::class, "index"])->name("admin.departments.index");
    Route::get("/departments/show/{id}", [DepartmentController::class, "show"])->name("admin.departments.show");
    Route::get("/departments/create", [DepartmentController::class, "create"])->name("admin.departments.create");
    Route::post("/departments/store", [DepartmentController::class, "store"])->name("admin.departments.store");
    Route::get("/departments/edit/{id}", [DepartmentController::class, "edit"])->name("admin.departments.edit");
    Route::post("/departments/update/{id}", [DepartmentController::class, "update"])->name("admin.departments.update");
    Route::get("/departments/destroy/{id}", [DepartmentController::class, "destroy"])->name("admin.departments.destroy");


    // Blogs management routes
    Route::get("/blogs", [BlogController::class, "index"])->name("admin.blogs.index");
    Route::get("/blogs/show/{id}", [BlogController::class, "show"])->name("admin.blogs.show");
    Route::get("/blogs/create", [BlogController::class, "create"])->name("admin.blogs.create");
    Route::post("/blogs/store", [BlogController::class, "store"])->name("admin.blogs.store");
    Route::get("/blogs/edit/{id}", [BlogController::class, "edit"])->name("admin.blogs.edit");
    Route::post("/blogs/update/{id}", [BlogController::class, "update"])->name("admin.blogs.update");
    Route::get("/blogs/destroy/{id}", [BlogController::class, "destroy"])->name("admin.blogs.destroy");

    // City management routes
    Route::get("/city", [CityController::class, "index"])->name("admin.cities.index");
    Route::get("/city/create", [CityController::class, "create"])->name("admin.cities.create");
    Route::post("/city/store", [CityController::class, "store"])->name("admin.cities.store");
    Route::get("/city/edit/{id}", [CityController::class, "edit"])->name("admin.cities.edit");
    Route::post("/city/update/{id}", [CityController::class, "update"])->name("admin.cities.update");
    Route::get("/city/{id}", [CityController::class, "show"])->name("admin.cities.show");
    Route::post("/city/destroy/{id}", [CityController::class, "destroy"])->name("admin.cities.destroy");

    // Country management routes
    Route::get("/country", [CountryController::class, "index"])->name("admin.countries.index");
    Route::get("/country/create", [CountryController::class, "create"])->name("admin.countries.create");
    Route::post("/country/store", [CountryController::class, "store"])->name("admin.countries.store");
    Route::get("/country/edit/{id}", [CountryController::class, "edit"])->name("admin.countries.edit");
    Route::post("/country/update/{id}", [CountryController::class, "update"])->name("admin.countries.update");
    Route::get("/country/{id}", [CountryController::class, "show"])->name("admin.countries.show");
    Route::post("/country/destroy/{id}", [CountryController::class, "destroy"])->name("admin.countries.destroy");


    // About us page
    Route::get("/about-us", [SettingController::class, "aboutus"])->name("admin.aboutus.index");
    Route::post("/settings/update/about-us", [SettingController::class, "updateAboutUsPage"])->name("admin.settings.about-us");

    // Setting management routes
    Route::get("/settings", [SettingController::class, "index"])->name("admin.settings.index");
    Route::post("/settings/update", [SettingController::class, "setKey"])->name("admin.settings.update");
    Route::post("/settings/update/site_logo", [SettingController::class, "updateSiteLogo"])->name("admin.settings.updateSiteLogo");
    Route::post("/settings/update/site_banner", [SettingController::class, "updateSiteBanner"])->name("admin.settings.updateSiteBanner");
    Route::post("/settings/hero-slider/store", [SettingController::class, "heroSliderStore"])->name("admin.settings.hero-slider.store");
    Route::post("/settings/hero-slider/destroy", [SettingController::class, "heroSliderDestroy"])->name("admin.settings.hero-slider.destroy");

    Route::get("/main-slider", [MainSliderController::class, "index"])->name("admin.main-slider.index");
    Route::post("/main-slider/store", [MainSliderController::class, "store"])->name("admin.main-slider.store");
    Route::post("/main-slider/destroy/{id}", [MainSliderController::class, "destroy"])->name("admin.main-slider.destroy");

    // profile routes
    Route::get("/profile", [ProfileController::class, "index"])->name("admin.profile.index");
    Route::get("/profile/edit", [ProfileController::class, "edit"])->name("admin.profile.edit");
    Route::post("/profile/edit", [ProfileController::class, "update"])->name("admin.profile.update");
});


Route::get("/seed-depts", function(){
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
            App\Models\Department::create(['name' => $department]);
        }
});

