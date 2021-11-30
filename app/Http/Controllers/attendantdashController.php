<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class attendantdashController extends Controller
{
    public function index()
    {
        return view('Attendant Dashboard/attendantdash');
    }
}
