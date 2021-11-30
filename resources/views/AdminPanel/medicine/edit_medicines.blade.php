@extends('layouts.master')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Edit Medicines Category</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
                    {{ Form::open(array('url' => route('medicine.update', ['medicine' => $medicinesedit->id ,'edit_med_cat' => $medicinesData]), 'method' => 'put' , 'class' => 'body')) }}
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('med_name',$medicinesedit->med_name,array('class' => 'form-control', 'placeholder' => 'Medicines Name'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::text('med_company',$medicinesedit->med_company,array('class' => 'form-control', 'placeholder' => 'Medicines Company'))}}
                                    </div>
                                </div>
                            </div>
                        </div>
                                                
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::date('med_expiry',$medicinesedit->med_expiry,array('class' => 'form-control', 'placeholder' => 'Medicines Expiry'))}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="form-line">
                                    {{ Form::select('med_cat' , $medicinesData, null ,array('class' => 'form-control', 'placeholder' => 'Medicines Expiry')) }}
                                    </div>
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