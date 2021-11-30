@extends('layouts.master')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Dose Scheduling</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Dose Scheduling</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Patient Id</th>
                                    <th>Doctor Id</th>
                                    <th>Attendant Name</th>
                                    <th>Prescription Id</th>
                                    <th>Disease</th>
                                    <th>Medicine</th>
                                    <th>Weeks</th>
                                    <th>From Date</th>
                                    <th>Till Date</th>
                                    <th>Medicine Dosage</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>Naqvi</td>
                                    <td>22</td>
                                    <td>Cold</td>
                                    <td>Panadol</td>
                                    <td>4</td>
                                    <td>12/7/21</td>
                                    <td>12/7/21</td>
                                    <td>4</td>
                                    <td class="d-flex justify-content-between"><a class="btn btn-primary btn-sm">Edit</a><a class="btn btn-danger btn-sm">Delete</a></td>
                                    
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>3</td>
                                    <td>Naqvi</td>
                                    <td>22</td>
                                    <td>Cold</td>
                                    <td>Panadol</td>
                                    <td>4</td>
                                    <td>12/7/21</td>
                                    <td>12/7/21</td>
                                    <td>4</td>
                                    <td class="d-flex justify-content-between"><a class="btn btn-primary btn-sm">Edit</a><a class="btn btn-danger btn-sm">Delete</a></td>
                                    
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
