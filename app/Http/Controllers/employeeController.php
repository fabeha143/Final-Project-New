<?php

namespace App\Http\Controllers;

use App\Models\employee_role;
use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = employee::all();
        return view('AdminPanel/employee/employee',['employee' => $employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = employee_role::select('id','role_name')->get();
        
        $employee_role = array();
        foreach( $items as $item )
        {
            $employee_role[$item->id] = $item->role_name;
        }
        
        return view('AdminPanel/employee/add_employee',compact('employee_role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        employee::create([
            'emp_fname' => $request->Fname,
            'emp_lname' => $request->lname,
            'emp_email' => $request->email,
            'emp_gender' => $request->gender,
            'emp_joining_date' => $request->joining_date,
            'emp_phone' => $request->phone,
            'emp_address' => $request->address,
            'emp_username' => $request->username,
            'emp_password' => $request->password,
            'emp_confirm_password' => $request->password_confirmation,
            'role_id' => $request->role_id,
        ]);
        return redirect(route('employee.index'));
       
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
        $employeeEdit  = employee::where('id' , $id)->first();

        $employee_role = employee_role::all();
        $emp_role_data = array();

        foreach( $employee_role as $role )
        {            
            $emp_role_data[$role->id] = $role->role_name; 
        }

        return view('AdminPanel/employee/edit_employee',compact('employeeEdit','emp_role_data') );
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
        employee::where('id' , $id)->update([
            'emp_fname' => $request->Fname,
            'emp_lname' => $request->lname,
            'emp_email' => $request->email,
            'emp_gender' => $request->gender,
            'emp_joining_date' => $request->joining_date,
            'emp_phone' => $request->phone,
            'emp_address' => $request->address,
            'emp_username' => $request->username,
            'emp_password' => $request->password,
            'emp_confirm_password' => $request->password_confirmation,
            'role_id' => $request->role_id,
        ]);
        return redirect(route('employee.index'));  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        employee::where('id' , $id)->delete();
        return redirect(route('employee.index'));
    }
}
