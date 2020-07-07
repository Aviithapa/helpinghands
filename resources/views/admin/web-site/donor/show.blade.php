@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'User profile'])
    <div>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>{{$donor->name}}</h4>
                        <div class="tools">
                            <a href="javascript:void(0);" class="collapse"></a>
                        </div>
                    </div>
                    <div class="grid-body ">
                        <div class="col-md-12">
                            <div class=" tiles white col-md-12 no-padding">
                                <div class="tiles green cover-pic-wrapper">
                                    <img src="/assets/img/cover_pic.png" alt="">
                                </div>
                                <div class="tiles white">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3">
                                            <div class="user-profile-pic">
                                                <img width="69" height="69"
                                                     data-src-retina="{{$donor->image?:imageNotFound('user')}}"
                                                     data-src="{{$donor->image?:imageNotFound('user')}}"
                                                     src="{{$donor->image?:imageNotFound('user')}}" alt="">
                                            </div>
                                            <div class="user-mini-description">
                                                <h5>Joined On:</h5>
                                                <h3 class="text-success semi-bold">
                                                    {{getDateFormat($donor->created_at)}}
                                                </h3>
                                                <hr>
                                                <h5>User type:</h5>
                                                <h3 class="text-success semi-bold">
                                                    Donor                                               </h3>
                                            </div>
                                        </div>
                                        <div class="col-md-5 user-description-box col-sm-5">
                                            <h4 class="semi-bold no-margin">{{$donor->name}} </h4>
                                            <h6 class="no-margin">{{$donor->user_name}}</h6>
                                            <br>
                                            <p><i class="fa fa-at"></i>{{$donor->email?:'N/A'}}</p>
                                            <p><i class="fa fa-phone"></i>{{$donor->phoneNumber?:'N/A'}}</p>
                                            <p><i class="fa fa-mobile"></i>{{$donor->mobileNumber?:'N/A'}}</p>
                                            <p><i class="fa fa-map-marker"></i>{{$donor->address?:'N/A'}}</p>
                                        </div>
                                    </div>
                                    <div class="tiles-body">
                                        <div class="row">
                                            <div class="post col-md-12">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">Event Information</div>
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li>
                                                                    Event ID: {{$donor->event_id?:'N/A'}}
                                                                </li>
                                                                <li>
                                                                    Event Title: {{$events->title?:'N/A'}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">Donation Voucher</div>
                                                        <div class="panel-body">
                                                            <ul>
                                                                <div class="col-md-12 col-lg-12">

                                                                    @if(isset($donor))
                                                                        <img src="{{url(isset($donor)?$donor->getImage():imageNotFound())}}" height="250"
                                                                             id="voucher_img">

                                                                    @else
                                                                        <img src="{{isset($donor)?$donor->getImage():imageNotFound()}}" height="250"
                                                                             id="voucher_img">
                                                                    @endif
                                                                </div>
                                                            </ul>
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
