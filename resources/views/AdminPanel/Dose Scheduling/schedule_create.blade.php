@extends('layouts.master')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Create schedule</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Scheduling</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Patient Id</th>
                                    <th>Doctor Id</th>
                                    <th>Prescription Id</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>22</td>
                                    <td class="d-flex justify-content-center"><a class="btn btn-primary btn-sm" href="{{ route('schedule.create') }}">Set Schedule</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>22</td>
                                    <td class="d-flex justify-content-center"><a class="btn btn-primary btn-sm" href="{{ route('schedule.create') }}">Set Schedule</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection()
