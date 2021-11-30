@extends('layouts.master')
@section('content')
    
    

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Employee</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
                    {{ Form::open(array('route' => 'employee.store' , 'method' => 'POST' , 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('Fname','First Name',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('lname','Last Name',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group drop-custum">
                                {{ Form::select('gender',array('Female' => 'Female' , 'Male' => 'Male'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select' ] )}}
                                </div>
                            </div>
                            
                        </div>
                        <div class="row clearfix">                            
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::text('phone','Phone Number',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::date('joining_date','Joining Date',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            
                        <div>
                             
                        
                        <div class="row clearfix">                            
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('address','Address',array('class' => 'form-control'))}}
                                    </div>
                                </div>
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
        
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>
                        Employees's Account Information
                        <small>Description text here...</small>
                        </h2>
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="body">
                        @csrf
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <x-label for="name" :value="__('Name')" />

                                    <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <x-label for="email" :value="__('Email')" />

                                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                    </div>
                                </div>
                            </div>
                         
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation" class="form-control"
                                        type="password"
                                        name="password_confirmation" required />
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group drop-custum">
                                <select name="role_id" id="role_id" class="form_control" required >
                                    <option value="">Select Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="doctor">Doctor</option>
                                    <option value="attendant">Attendant</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="col-sm-12">
                            <x-button class="btn btn-raised g-bg-cyan">
                                {{ __('Register') }}
                            </x-button>
                            <!-- {{ Form::submit('Cancel',array('class' => 'btn btn-danger'))}} -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="color-bg"></div>
@endsection()