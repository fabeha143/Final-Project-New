@extends('layouts.master')
@section('content')
<section class="content email-page">
    <div class="container-fluid">
        <div class="row clearfix">                 
            <div class="col-lg-12">
                <ul class="nav nav-tabs bg-white">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#primary">Primary</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active in" id="primary">
                        <div class="mail_listing table-responsive">
                            <table class="table table_custom table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td>
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_2" />
                                                <label for="basic_checkbox_2"></label>
                                            </div>
                                        </td>                                    
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down">Hamza</td>
                                        <td class="max-texts">
                                            <a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a>
                                        </td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> 12:30 PM </td>
                                    </tr>
                                    <tr class="unread">
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_3" />
                                                <label for="basic_checkbox_3"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down hidden-md-down">Aamna</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 13 </td>
                                    </tr>
                                    <tr class="unread">
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_4" />
                                                <label for="basic_checkbox_4"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down">Ali</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 12 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_5" />
                                                <label for="basic_checkbox_5"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down">Sheroz</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 12 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_55" />
                                                <label for="basic_checkbox_55"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down">Hamza</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 12 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_39" />
                                                <label for="basic_checkbox_39"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down">Hamza</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_8" />
                                                <label for="basic_checkbox_8"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down hidden-md-down">Aamna</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_9" />
                                                <label for="basic_checkbox_9"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down hidden-md-down">Ali</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="social">
                        <div class="mail_listing table-responsive">
                            <table class="table table_custom table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td>
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_2" />
                                                <label for="basic_checkbox_2"></label>
                                            </div>
                                        </td>                                    
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down">Hamza</td>
                                        <td class="max-texts">
                                            <a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a>
                                        </td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> 12:30 PM </td>
                                    </tr>
                                    <tr class="unread">
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_3" />
                                                <label for="basic_checkbox_3"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down">Aamna</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 13 </td>
                                    </tr>                                           
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_44" />
                                                <label for="basic_checkbox_44"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down">Aamna</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_43" />
                                                <label for="basic_checkbox_43"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down">Ali</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>                                            
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_39" />
                                                <label for="basic_checkbox_39"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down">Hamza</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_8" />
                                                <label for="basic_checkbox_8"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down">Aamna</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_9" />
                                                <label for="basic_checkbox_9"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down">Ali</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="updates">
                        <div class="mail_listing table-responsive">
                            <table class="table table_custom table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td>
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_2" />
                                                <label for="basic_checkbox_2"></label>
                                            </div>
                                        </td>                                    
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down">Hamza</td>
                                        <td class="max-texts">
                                            <a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a>
                                        </td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> 12:30 PM </td>
                                    </tr>
                                    <tr class="unread">
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_3" />
                                                <label for="basic_checkbox_3"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down">Aamna</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 13 </td>
                                    </tr>                                           
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_44" />
                                                <label for="basic_checkbox_44"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down">Aamna</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_43" />
                                                <label for="basic_checkbox_43"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down">Ali</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>                                            
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_39" />
                                                <label for="basic_checkbox_39"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down">Hamza</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_8" />
                                                <label for="basic_checkbox_8"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down">Aamna</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_9" />
                                                <label for="basic_checkbox_9"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down">Ali</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_43" />
                                                <label for="basic_checkbox_43"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down">Ali</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 11 </td>
                                    </tr>                                            
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_39" />
                                                <label for="basic_checkbox_39"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star-outline"></i></td>
                                        <td class="hidden-sm-down">Hamza</td>
                                        <td class="max-texts"><a href="javascript:void(0);"> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><a><i class="zmdi zmdi-attachment-alt"></i></a></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                    <tr>
                                        <td><div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_8" />
                                                <label for="basic_checkbox_8"></label>
                                            </div></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-star text-warning"></i></td>
                                        <td class="hidden-sm-down">Aamna</td>
                                        <td class="max-texts"><a href="javascript:void(0);">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                        <td class="hidden-sm-down"><i class="zmdi zmdi-attachment-alt"></i></td>
                                        <td class="text-right"> May 09 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>        
            <div class="col-sm-6">
                <p class="m-t-15">Showing 1 - 15 of 200</p>
            </div>
            <div class="col-sm-6 text-right">
                <button type="button" class="btn btn-primary  btn-sm"><i class="zmdi zmdi-arrow-left"></i></button>
                <button type="button" class="btn btn-primary  btn-sm"><i class="zmdi zmdi-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>
@endsection()
