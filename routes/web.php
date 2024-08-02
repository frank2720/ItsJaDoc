<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\General\HomeController;
use App\Http\Controllers\Doctors\DoctorController;
use App\Http\Controllers\Patients\PatientController;

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
Route::get('/search-doctors',[HomeController::class,'search'])->name('patient.search');
Route::get('/calendar',[HomeController::class,'calendar'])->name('calendar');

Route::middleware('auth')->group( function(){

    Route::middleware('is_admin')->group(function(){

        Route::get('/appointments',[DoctorController::class,'appointment'])->name('appointments');

        Route::group([
            'as'=>'admin.'
        ],function(){
            Route::get('/admin-dashboard',[AdminController::class,'index'])->name('home');
        });
    });

    Route::group([
        'as'=>'patient.'
    ], function(){
        Route::get('/charts',[PatientController::class,'chats'])->name('chats');
        Route::get('/favourite-doctors',[PatientController::class,'favourite'])->name('favourites');
        Route::get('/patient-dashboard',[PatientController::class,'index'])->name('home');
    });

    Route::group([
        'as'=>'doctor.',
        'middleware'=>'is_doctor'
    ],function(){
        Route::get('/doctor-dashboard',[DoctorController::class,'index'])->name('home');
        Route::get('/doctor-profile',[HomeController::class,'doctor_profile'])->name('profile');
    });
});

Auth::routes();
