@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Appointment</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Patient Appointment</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Appointment Id</th>
                                    <th>Patient Name</th>
                                    <th>Patient DOB</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Doctor Name</th>
                                    <th>Department</th>
                                    <th>Appointment Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($appointments))
                                @foreach($appointments as $list)
                                <tr>
                                    <td>{{ $list->id}}</td>
                                    <td>{{ $list->patient_name}}</td>
                                    <td>{{ $list->patient_dob}}</td>
                                    <td>{{ $list->appointment_date}}</td>
                                    <td>{{ $list->appointment_time}}</td>
                                    <td>{{ $list->doctors->doc_fname}} {{ $list->doctors->doc_lname}}</td>
                                    <td>{{ $list->departments->dep_name}}</td>
                                    <td>{{ $list->status}}</td>
                                    <td class="d-flex justify-content-between">
                                        <a class="btn btn-primary btn-sm" href="{{ url('/approved',$list->id)}}">Approve</a>
                                        <a class="btn btn-danger btn-sm" href="{{ url('/cancel',$list->id)}}">Cancel</a></td>
                                    
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
<div class="color-bg"></div>
@endsection()