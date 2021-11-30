<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentWebController extends Controller
{
    public function index()
    {
        return view('website/appointmentweb');
    }
}
