@extends('layouts.master')
@section('content')
<!-- #Float icon -->
<ul id="f-menu" class="mfbc-br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfbc_wrap">
        <a href="{{ route('doctor.create')}}" class="mfbcb-main g-bg-cyan">
            <i class="mfbcm-icon-resting zmdi zmdi-plus"></i>
            <i class="mfbcm-icon-active zmdi zmdi-close"></i>
        </a>
    </li>
</ul>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Doctors Details</h2>
            <small class="text-muted">Welcome to Good Health</small>
        </div>

       
                <div class="row clearfix">
                @if(count($doctors))
                    @foreach($doctors as $list)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown"> <a href= "javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li style="width: 100%;">  
                                                {!! Form::open(array('url' => route('doctor.edit',      ['doctor' => $list->id]), 'method' => 'get')) !!}
                                                        {!! Form::submit('Edit', array('class' => 'btn btn-primary w-100')) !!}
                                                    {!! Form::close() !!}
                                            </li>
                                            <li> {!! Form::open(array('url' => route('doctor.destroy', ['doctor' => $list->id]), 'method' => 'delete')) !!}		
                                                        {!! Form::submit('Delete', array('class' => 'btn btn-danger w-100')) !!}
                                            
                                                    {!! Form::close() !!}</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="member-card verified ">
                                    <div class="thumb-xl member-thumb">
                                        <img src="images/random-avatar7.jpg" class="img-thumbnail rounded-circle" alt="profile-image">
                                    </div>

                                    <div class="">
                                        <h4 class="m-b-5 m-t-20">Dr.{{ $list->doc_fname}}</h4>
                                        <p class="text-muted">{{ $list->departments->dep_name}}</p>
                                    </div>

                                    <p class="text-muted">{{ $list->doc_address}}</p>
                                    <p class="text-muted">{{ $list->doc_email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                 @endif
                </div>
            
    </div>
</section>

@endsection()