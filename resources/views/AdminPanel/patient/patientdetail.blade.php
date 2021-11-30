@extends('layouts.master')
@section('content')

<!-- #Float icon -->
<ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfbc_wrap">
        <a href="{{ route('patient.create')}}" class="mfbcb-main g-bg-cyan">
            <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
            <i class="mfbcm-icon-active zmdi zmdi-close"></i>
        </a>
    </li>
</ul>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Patient Details</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Patient Details</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Patient Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Addmission Date</th>
                                    <th>Gender</th>
                                    <th>Patient Catogary</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Date of birth</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($patients))
                                @foreach($patients as $list)
                                    <tr>
                                        <td>{{ $list->id}}</td>
                                        <td>{{ $list->pat_fname}}</td>
                                        <td>{{ $list->pat_lname}}</td>
                                        <td>{{ $list->pat_phone}}</td>
                                        <td>{{ $list->pat_admission_date}}</td>
                                        <td>{{ $list->pat_gender}}</td>
                                        <td>{{ $list->pat_category}}</td>
                                        <td>{{ $list->pat_email}}</td>
                                        <td>{{ $list->pat_address}}</td>
                                        <td>{{ $list->pat_date_of_birth}}</td>
                                        <td class="d-flex justify-content-center">
                                            {!! Form::open(array('url' => route('patient.edit', ['patient' => $list->id]), 'method' => 'get')) !!}
                                                {!! Form::submit('Edit', array('class' => 'btn btn-primary openbutton')) !!}
                                            {!! Form::close() !!}

                                            {!! Form::open(array('url' => route('patient.destroy', ['patient' => $list->id]), 'method' => 'delete')) !!}		
                                                {!! Form::submit('Delete', array('class' => 'btn btn-danger openbutton')) !!}
                                    
                                            {!! Form::close() !!}


                                        </td>
                                    </tr>
                                @endforeach
                            @endif 
                            
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection()
