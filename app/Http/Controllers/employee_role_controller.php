<?php

namespace App\Http\Controllers;
use App\Models\employee_role;
use Illuminate\Http\Request;

class employee_role_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp_role = employee_role::all();
        return view('AdminPanel/employee_role/employee_role',['emp_role' => $emp_role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel/employee_role/add_emp_role');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        employee_role::create([
            'role_name' => $request->role_name,
            'role_description' => $request->role_description,
        ]);
        return redirect(route('employeeRole.index'));
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
        $emp_role_edit  = employee_role::where('id' , $id)->first();
        return view('AdminPanel/employee_role/edit_emp_role',['emp_role_edit' => $emp_role_edit] );
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
        employee_role::where('id' , $id)->update([
            'role_name' => $request->role_name,
            'role_description' => $request->role_description,
        ]);
        return redirect(route('employeeRole.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        employee_role::where('id' , $id)->delete();
        return redirect(route('employeeRole.index'));
    }
}
