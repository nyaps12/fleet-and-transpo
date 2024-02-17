<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Dashboard;
use App\Http\Controllers\pages\MonitoringVehicles;
use App\Http\Controllers\pages\DeliveryScheduling;
use App\Http\Controllers\pages\VehiclesInformation;
use App\Http\Controllers\pages\ReportingAndAnalytics;
use App\Http\Controllers\pages\VehiclesReservation;
use App\Http\Controllers\pages\VehiclesAvailability;
use App\Http\Controllers\pages\DriversInformation;
use App\Http\Controllers\pages\DeliveryReport;
use App\Http\Controllers\pages\QRCode;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\pages\Leaflet;
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

// Main Page Route
Route::get('/', [HomePage::class, 'index'])->name('pages-home');
Route::get('/dashboard', [Dashboard::class, 'index'])->name('pages-dashboard');
Route::get('/monitoringvehicles', [MonitoringVehicles::class, 'index'])->name('pages-monitoring-vehicle');
Route::get('/deliveryscheduling', [DeliveryScheduling::class, 'index'])->name('pages-delivery-scheduling');
Route::get('/vehiclesinformation', [VehiclesInformation::class, 'index'])->name('pages-vehicles-information');
Route::get('/reporting-and-analytics', [ReportingAndAnalytics::class, 'index'])->name('pages-reporting-and-analytics');
Route::get('/vehicle-reservation', [VehiclesReservation::class, 'index'])->name('pages-vehicle-reservation');
Route::get('/vehicle-availability', [VehiclesAvailability::class, 'index'])->name('pages-vehicle-availability');
Route::get('/driver-information', [DriversInformation::class, 'index'])->name('pages-driver-information');
Route::get('/delivery-report', [DeliveryReport::class, 'index'])->name('pages-delivery-report');
Route::get('/qr-code', [QRCode::class, 'index'])->name('pages-qr-code');



// locale
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');

//maps
Route::get('/leaflet', [Leaflet::class, 'index'])->name('leaflet');
