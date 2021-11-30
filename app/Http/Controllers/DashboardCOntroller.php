<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardCOntroller extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin')){

            return view('AdminPanel/index');
        }
        elseif(Auth::user()->hasRole('doctor')){

            return view('DoctorDashboard/doctordash');
        }
        elseif(Auth::user()->hasRole('attendant')){
            
            return view('Attendant Dashboard/attendantdash');
        }
    }
}
