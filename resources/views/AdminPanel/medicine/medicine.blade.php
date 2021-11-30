@extends('layouts.master')
@section('content')

<!-- #Float icon -->
<ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfbc_wrap">
        <a href="{{ route('medicine.create')}}" class="mfbcb-main g-bg-cyan">
            <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
            <i class="mfbcm-icon-active zmdi zmdi-close"></i>
        </a>
    </li>
</ul>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Medicines</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Medicines</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Medicines Id</th>
                                    <th>Medicines Name</th>
                                    <th>Medicines company</th>
                                    <th>Medicine Expiry</th>
                                    <th>Medicines Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    @if(count($medicines))
                                        @foreach($medicines as $list)
                                            
                                                <td>{{ $list->id}}</td>
                                                <td>{{ $list->med_name}}</td>
                                                <td>{{ $list->med_company}}</td>
                                                <td>{{ $list->med_expiry}}</td>
                                                <td>{{ $list->med_cat}}</td>
                                                <td class="d-flex justify-content-center">
                                                {!! Form::open(array('url' => route('medicine.edit', ['medicine' => $list->id]), 'method' => 'get')) !!}		
                                                {!! Form::submit('Edit', array('class' => 'btn btn-large btn-primary openbutton')) !!}
                                                {!! Form::close() !!}

                                                {!! Form::open(array('url' => route('medicine.destroy', ['medicine' => $list->id]), 'method' => 'delete')) !!}		
                                                {!! Form::submit('Delete', array('class' => 'btn btn-large btn-danger openbutton')) !!}
                                        
                                            {!! Form::close() !!}

                                            </td>
                                        
                                            
                                        @endforeach
                                    @endif
                                            
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
