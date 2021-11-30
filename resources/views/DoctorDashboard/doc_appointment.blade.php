@extends('layouts.doctormaster')
@section('contentdoctor')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Appointment List</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Appointment</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Appointment Id</th>
                                    <th>Patient Name</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($data))
                                @foreach($data as $list)
                                    <tr>
                                        <td>{{ $list->id}}</td>
                                        <td>{{ $list->patient_name}}</td>
                                        <td>{{ $list->appointment_date}}</td>
                                        <td>{{ $list->appointment_time}}</td>
                                        <td>{{ $list->status}}</td>
                                        <td>
                                        <a class="btn btn-primary btn-sm" href="{{ url('/writePrescription',$list->id)}}">Prescribe</a> 
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
