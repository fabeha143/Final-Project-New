<?php

namespace App\Http\Controllers;
use App\Models\appointments;


use Illuminate\Http\Request;

class doctordashController extends Controller
{
    public function doc_appointment()
    {
        $data = appointments::where('status', 'Approved')->get();
        return view('DoctorDashboard/doc_appointment',['data' => $data]);
    }
    public function prescription()
    {
        return view('DoctorDashboard/write_prescription');
    }
    public function prescriptionlist()
    {
        return view('DoctorDashboard/prescription_list');
    }
}
    
