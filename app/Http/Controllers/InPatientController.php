<?php

namespace App\Http\Controllers;
use App\Models\patient;
use App\Models\prescription;
use Illuminate\Http\Request;

class InPatientController extends Controller
{
    public function index()
    {
       $patients = patient::all();
        return view('DoctorDashboard/InPatientlist',['patients' => $patients]);
    }
    public function create($id)
    {
        prescription::create ([
        'pat_fname' => $request->Fname,
        'pat_lname' => $request->lname,
        'pat_phone' => $request->phone,
        'pat_admission_date' => $request->addmission_date,
        'pat_gender' => $request->gender,
        'pat_category' => $request->pat_category,
        'pat_email' => $request->email,
        'pat_address' => $request->address,
        'pat_date_of_birth' => $request->date_of_birth,
    ]);
    return redirect(route('patient.index'));
    }
}
