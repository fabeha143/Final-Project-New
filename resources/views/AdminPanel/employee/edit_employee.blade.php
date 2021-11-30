@extends('layouts.master')
@section('content')
    
    

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Edit Employee</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
					{{ Form::open(array('url' => route('employee.update', ['employee' => $employeeEdit->id , 'emp_role_data' =>  $emp_role_data]), 'method' => 'put' , 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('Fname',$employeeEdit->Fname,array('class' => 'form-control' , 'placeholder' => 'First Name'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('lname',$employeeEdit->emp_lname,array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::email('email',$employeeEdit->emp_email,array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row clearfix">                            
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::text('phone',$employeeEdit->emp_phone,array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('joining_date',$employeeEdit->emp_joining_date,array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="form-group drop-custum">
                                {{ Form::select('gender',array('Female' => 'Female' , 'Male' => 'Male'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select' ] )}}
                                </div>
                            </div>
                             <div class="col-lg-4">
                                <div class="form-group drop-custum">
                                {{ Form::select('role_id',$emp_role_data,'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Role' ]) }}
                                </div>
                            </div> 
                          <div>
                              <div>
                              </div>
                          </div>
                        </div>
                        
                        <div class="row clearfix">                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::textarea('address',$employeeEdit->emp_address,array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                       
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('username',$employeeEdit->emp_username,array('class' => 'form-control', 'placeholder' => 'Username'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::password('password',array('class' => 'form-control', 'placeholder' => 'Password'))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::password('password_confirmation',array('class' => 'form-control', 'placeholder' => 'Confirm Password'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">                                                             
                            </div>
                            <div class="col-sm-12">
                            {{ Form::submit('Submit',array('class' => 'btn btn-raised g-bg-cyan'))}}
                            {{ Form::submit('Cancel',array('class' => 'btn btn-danger'))}}
                            </div>
                        </div>
                    {{ Form::close() }}
				</div>
			</div>
		</div>        
    </div>
</section>
<div class="color-bg"></div>
@endsection()