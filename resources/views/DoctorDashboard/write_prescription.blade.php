@extends('layouts.doctormaster')
@section('contentdoctor')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Prescription</h2>
            <small class="text-muted">Welcome to Good Health application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Prescription <small>Description text here...</small> </h2> 
					</div>
                    {{ Form::open(array('url' => route('Prescriptioncreate', ['id' => $appointments->id]), 'method' => 'post' , 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('pres_disease','Disease',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            {{ Form::select('medicines',$medicine,'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Weeks' ] )}}
                            </div>
                            
                        </div>
                        <div class="row clearfix">
                              
                            
                            <div class="col-sm-6">
                                <div class="form-group drop-custum">
                                {{ Form::select('weeks',array('1' => '1' , '2' => '2' ,'3' => '3' , '4' => '4'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Weeks' ] )}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::date('from_date','From',array('class' => 'form-control datepicker'))}}
                                    </div>
                                </div>
                            </div>  
                                                          
                        </div>
                        <div class="row clearfix">
                              
                            
                              <div class="col-sm-6">
                                  <div class="form-group drop-custum">
                                  {{ Form::date('till_date','From',array('class' => 'form-control datepicker'))}}
                                  </div>
                              </div>

                                <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::select('dosage',array('1' => '1' , '2' => '2' ,'3' => '3'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Weeks' ] )}}
                                    </div>
                                </div>
                                </div>
                                                            
                        </div>
                        <div class="row clearfix">
                              
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::select('patient_cat',array('In patient' => 'In patient' , 'Out Patient' => 'Out Patient'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Patient Category' ] )}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::textarea('description','Description',['class'=> 'form-control' , 'placeholder' => 'Description' ] )}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::hidden('appointmentid' ,$appointments->id)}}
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