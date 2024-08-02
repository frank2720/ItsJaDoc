<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Doctors\DoctorController;
use App\Http\Controllers\General\HomeController;
use App\Http\Controllers\Patients\PatientController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/calendar',[HomeController::class,'calendar'])->name('calendar');
Route::get('/doctor-dashboard',[DoctorController::class,'index'])->name('doctor.home');
Route::get('/patient-dashboard',[PatientController::class,'index'])->name('patient.home');
Route::get('/charts',[PatientController::class,'chats'])->name('patient.chats');
Route::get('/favourite-doctors',[PatientController::class,'favourite'])->name('patient.favourites');

Route::get('/search-doctors',[HomeController::class,'search'])->name('patient.search');

Route::get('/admin-dashboard',[AdminController::class,'index'])->name('admin.home');
Route::get('/appointments',[DoctorController::class,'appointment'])->name('appointments');
Auth::routes();
