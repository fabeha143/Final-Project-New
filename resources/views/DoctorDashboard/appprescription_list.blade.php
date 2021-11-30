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
                                    <th>Disease</th>
                                    <th>Medicines</th>
                                    <th>Weeks</th>
                                    <th>From Date</th>
                                    <th>Till Date</th>
                                    <th>Dosage</th>
                                    <th>Patient Category</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>Rana</td>
                                    <td>In Patient</td>
                                    <td>Cold</td>
                                    <td>Panadol</td>
                                    <td>1</td>
                                    <td>21/10/21</td>
                                    <td>30/10/21</td>
                                    <td>2</td>
                                    <td class="d-flex justify-content-center"><a class="btn btn-primary btn-sm" href="#">Edit</a><a class="btn btn-danger btn-sm" href="#">Delete</a></td>
                                    
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