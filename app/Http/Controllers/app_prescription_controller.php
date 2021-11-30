<?php

namespace App\Http\Controllers;
use App\Models\app_prescription;
use App\Models\appointments;
use App\Models\medicines;
use Illuminate\Http\Request;

class app_prescription_controller extends Controller
{

    public function index($id)
    {
        $appointments  = appointments::where('id' , $id)->first();
        $items = medicines::select('id','med_name')->get();
        $medicine = array();
        foreach( $items as $item )
        {
            $medicine[$item->id] = $item->med_name;
        }
        return view('DoctorDashboard/write_prescription',['appointments' => $appointments],compact('medicine'));
       
    }

    public function store(Request $request,$id=null)
    {
       
        app_prescription::create([
            'pres_disease' => $request->pres_disease,
            'medicines' => $request->medicines,
            'weeks' => $request->weeks,
            'from_date' => $request->from_date,
            'till_date' => $request->till_date,
            'dosage' => $request->dosage,
            'patient_cat' => $request->patient_cat,
            'description' => $request->description,
            'appointment_id' => $request->id,
        ]);

        return view("DoctorDashboard/appprescription_list");
       
    }
}
