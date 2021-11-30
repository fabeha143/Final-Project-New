@extends('layouts.master')
@section('content')

<!-- #Float icon -->
<ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfbc_wrap">
        <a href="{{ route('medicinesCategory.create')}}" class="mfbcb-main g-bg-cyan">
            <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
            <i class="mfbcm-icon-active zmdi zmdi-close"></i>
        </a>
    </li>
</ul>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Medicines Category</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Medicines Category</h2>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Medicine Category Id</th>
                                    <th>Medicine Category Name</th>
                                    <th>Medicine Category Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                        @foreach($med_cat as $list)
                                            
                                                <td>{{ $list->id}}</td>
                                                <td>{{ $list->med_cat_name}}</td>
                                                <td>{{ $list->med_cat_description}}</td>
                                        
                                                <td class="d-flex justify-content-center">
                                                {!! Form::open(array('url' => route('medicinesCategory.edit', ['medicinesCategory' => $list->id]), 'method' => 'get')) !!}		
                                                {!! Form::submit('Edit', array('class' => 'btn btn-large btn-primary openbutton')) !!}
                                                {!! Form::close() !!}

                                                {!! Form::open(array('url' => route('medicinesCategory.destroy', ['medicinesCategory' => $list->id]), 'method' => 'delete')) !!}		
                                                {!! Form::submit('Delete', array('class' => 'btn btn-large btn-danger openbutton')) !!}
                                        
                                            {!! Form::close() !!}

                                            </td>
                                        
                                            
                                        @endforeach
                               
                                            
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
