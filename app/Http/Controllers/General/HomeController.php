<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function calendar()
    {
        return view('calendar');
    }

    public function search()
    {
        return view('search');
    }

    public function doctor_profile()
    {
        return view('doctor.profile');
    }
}
