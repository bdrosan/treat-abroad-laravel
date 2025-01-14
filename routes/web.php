<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DiagnosticCenterController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SpecialityController;
use App\Models\Setting;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['middleware' => ['web']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');


    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('/doctors/{id}', [DoctorController::class, 'show'])->name('doctors.show');

    Route::get('/cities', [CityController::class, 'index'])->name('cities.index');

    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::post('/appointments/book', [AppointmentController::class, 'store'])->name('appointments.book');
    Route::get('/appointments/book/success', [AppointmentController::class, 'success'])->name('appointments.book.success');
    Route::get('/appointments/download-receipt/{id}', [AppointmentController::class, 'downloadAppointmentReceipt'])->name('appointments.download-receipt');

    Route::get('/speciality', [SpecialityController::class, 'index'])->name('speciality.index');

    Route::get('/diagnostic-centers', [DiagnosticCenterController::class, 'index'])->name('diagnostic-centers.index');

    Route::get('/hospitals', [HospitalController::class, 'index'])->name('hospitals.index');
    Route::get('/hospitals/{id}', [HospitalController::class, 'show'])->name('hospitals.show');


    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/{blogIdentifier}', [BlogController::class, 'show'])->name('blogs.show');

    Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');


    Route::get('/change-lang', [SettingController::class, 'changeLang'])->name('settings.change-lang');
});


Route::get('/whatsapp', function () {
    return redirect( "https://wa.me/+" . Setting::key("admin_whatsapp"));
})->name('whatsapp');


// tool links
Route::get("/migrate", function () {
    Artisan::call('migrate');
});
Route::get("/migrate-fresh", function () {
    Artisan::call('migrate:fresh');
});
Route::get("/migrate-fresh-seed", function () {
    Artisan::call('migrate:fresh --seed');
});
Route::get("/seed", function () {
    Artisan::call('db:seed');
});

require_once "admin.route.php";

Route::get("/contact", function () {
   return view('contact');
})->name('contact');