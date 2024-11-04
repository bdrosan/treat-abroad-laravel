<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\LabController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SpecialityController;
use App\Http\Controllers\Admin\DoctorController;
use Illuminate\Support\Facades\Route;


Route::get("/admin/login", [AuthController::class, "loginPage"])->name("admin.login");
Route::post("/admin/login", [AuthController::class, "login"])->name("admin.login.post");
Route::post("/admin/logout", [AuthController::class, "logout"])->name("admin.logout.post");

Route::group(['middleware' => ['isAdmin'], "prefix" => "admin"], function () {
    // dashboard routes
    Route::get("/dashboard", [DashboardController::class, "index"])->name("admin.dashboard.index");

    // appointment routes
    Route::get("/appointments", [AppointmentController::class, "index"])->name("admin.appointments.index");
    Route::get("/appointments/show/{id}", [AppointmentController::class, "show"])->name("admin.appointments.show");

    // doctor management routes
    Route::get("/doctors", [DoctorController::class, "index"])->name("admin.doctors.index");
    Route::get("/doctors/create", [DoctorController::class, "create"])->name("admin.doctors.create");
    Route::get("/doctors/show/{id}", [DoctorController::class, "show"])->name("admin.doctors.show");
    Route::post("/doctors/store", [DoctorController::class, "store"])->name("admin.doctors.store");
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


    // profile routes
    Route::get("/profile", [ProfileController::class, "index"])->name("admin.profile.index");
    Route::get("/profile/edit", [ProfileController::class, "edit"])->name("admin.profile.edit");
    Route::post("/profile/edit", [ProfileController::class, "update"])->name("admin.profile.update");
});


Route::get("/migrate-fresh", function (){
    \Illuminate\Support\Facades\Artisan::call("migrate:fresh --seed");
});