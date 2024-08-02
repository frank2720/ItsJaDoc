<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    
    public function index()
    {
        return view('patient-dashboard');
    }

    public function favourite()
    {
        return view('favourite');
    }

    public function chats()
    {
        return view('chat');
    }
}
