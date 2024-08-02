<?php

namespace App\Http\Controllers\Doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('doctor-dashboard');
    }

    public function appointment()
    {
        return view('doctor.appointment');
    }
}
