<?php

namespace App\Http\Controllers;
use App\Models\patient;
use App\Models\doctor;
use App\Models\departments;
use Illuminate\Http\Request;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $patients = patient::all();
        return view('AdminPanel/patient/patientdetail',['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $items = doctor::select('id','doc_fname')->get();
        
        // $doctorName = array();
        // foreach( $items as $item )
        // {
        //     $doctorName[$item->id] = $item->doc_fname;
        // }
        
        return view('AdminPanel/patient/add_patient');
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        patient::create([
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient_edit  = patient::where('id' , $id)->first();
        return view('AdminPanel/patient/edit_patient',['patient_edit' => $patient_edit] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        patient::where('id' , $id)->update([
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        patient::where('id' , $id)->delete();
        return redirect(route('patient.index'));
    }
}
