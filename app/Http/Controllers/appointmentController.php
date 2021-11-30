<?php

namespace App\Http\Controllers;
use App\Models\appointments;
use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function index()
    {
        $appointments = appointments::all();
        return view('AdminPanel/appointment',['appointments' => $appointments]);
    }
    public function approved($id)
    {
        $data = appointments::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }
    public function cancel($id)
    {
        $data = appointments::find($id);
        $data->status='Cancel';
        $data->save();
        return redirect()->back();
    }
}
