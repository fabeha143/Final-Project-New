@extends('layouts.master')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Medicinens</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
                    {{ Form::open(array('route' => 'medicine.store' , 'method' => 'POST' , 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('med_name',null,array('class' => 'form-control', 'placeholder' => 'Medicines Name'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('med_company',null,array('class' => 'form-control', 'placeholder' => 'Medicines Company'))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::date('med_expiry',"Medicines Expiry",array('class' => 'form-control', 'placeholder' => 'Medicines Expiry'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::select('med_cat', $medicines_category,'null',['class'=> 'form-control' , 'placeholder' => 'Please Select Category' ]) }}
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