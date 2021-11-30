@extends('layouts.master')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Edit Employee Role</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
                    {{ Form::open(array('url' => route('employeeRole.update', ['employeeRole' => $emp_role_edit->id]), 'method' => 'put' , 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('role_name',$emp_role_edit->role_name,array('class' => 'form-control', 'placeholder' => 'Department Name'))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row clearfix">                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('role_description',$emp_role_edit->role_description,array('class' => 'form-control', 'placeholder' => 'Department Description'))}}
                                    </div>
                                </div>
                            </div>
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