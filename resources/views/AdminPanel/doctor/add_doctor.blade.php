@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Doctor</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2>
						
					</div>
					{{ Form::open(array('route' => 'doctor.store' , 'method' => 'POST' , 'enctype' => 'multipart/form-data' , 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('Fname','First Name',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('lname','Last Name',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::date('dateofbirth','Date of birth',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group drop-custum">
                                {{ Form::select('gender',array('Female' => 'Female' , 'Male' => 'Male'),'null',['class'=> 'form-control' , 'placeholder' => 'Please Select' ] )}}
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::select('doc_department', $department,'null',['class'=> 'form-control' , 'placeholder' => 'Please Select department' ]) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('phone','Phone Number',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::email('email','Email',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('address','Address',array('class' => 'form-control'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <!-- <form action="https://thememakker.com/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop files here or click to upload.</h3> </div> -->
                                    <div class="file-upload-wrapper">
                                    {{ Form::file('files[]',array('files'=> true , 'multiple' => true , 'class' => 'file-upload'))}}
                                    </div>
                                <!-- </form> -->
                            </div>
                           
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        {{ Form::textarea('doc_biography','Short Biography',array('class' => 'form-control'))}}
                                    </div>
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

       
    
       
    </div>
</section>
@endsection()