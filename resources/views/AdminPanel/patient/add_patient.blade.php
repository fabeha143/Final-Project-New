@extends('layouts.master')
@section('content')
    
    

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Patient</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
                    {{ Form::open(array('route' => 'patient.store' , 'method' => 'POST' , 'class' => 'body')) }}
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
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::date('date_of_birth','Date of Birth',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">                            
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::date('addmission_date','Addmission Date',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::email('email','Email',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">
                                {{ Form::select('gender',array('Female' => 'Female' , 'Male' => 'Male'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Gender' ] )}}
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group drop-custum">
                                {{ Form::select('pat_category',array('In Patient' => 'In Patient' , 'Out Patient' => 'Out Patient'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Patient Category' ] )}}
                                </div>
                            </div>                               
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('address','Address',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('phone','Phone Number',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row clearfix">                            
                            
                            <div class="">
                                <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    {{ Form::close() }}
				</div>
			</div>
		</div>
              
    </div>
</section>
@endsection()