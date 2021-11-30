@extends('layouts.master')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Set Attendant</h2>
            <small class="text-muted">Welcome to Good Health application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2> 
					</div>
					<div class="body">
                        <div class="row clearfix">
                              
                            <div class="col-lg-6">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick">
                                        <option value="">-- Attendant Name --</option>
                                        <option value="10">Faraz</option>
                                        <option value="20">Ahmed</option>
                                    </select>
                                </div>
                            </div>
                                                          
                        </div>
                        
                        <div class="row clearfix">
                            <div class="">
                                <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                                <button type="submit" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
              
    </div>
</section>

@endsection()