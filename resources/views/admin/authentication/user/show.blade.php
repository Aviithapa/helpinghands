@extends('admin.layout.app')

@section('content')
    @include('admin.partials.common.page-title', ['page_title' => 'User profile'])
    <div>
        <div class="row-fluid">
            <div class="span12">
                <div class="grid simple ">
                    <div class="grid-title">
                        <h4>{{$user->name}}</h4>
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
                                                     data-src-retina="{{$user->image?:imageNotFound('user')}}"
                                                     data-src="{{$user->image?:imageNotFound('user')}}"
                                                     src="{{$user->image?:imageNotFound('user')}}" alt="">
                                            </div>
                                            <div class="user-mini-description">
                                                <h5>Joined On:</h5>
                                                <h3 class="text-success semi-bold">
                                                    {{getDateFormat($user->created_at)}}
                                                </h3>
                                                <hr>
                                                <h5>User type:</h5>
                                                <h3 class="text-success semi-bold">
                                                    {{$user->mainRole()?$user->mainRole()->display_name:''}}                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-md-5 user-description-box col-sm-5">
                                            <h4 class="semi-bold no-margin">{{$user->name}} </h4>
                                            <h6 class="no-margin">{{$user->user_name}}</h6>
                                            <br>
                                            <p><i class="fa fa-at"></i>{{$user->email?:'N/A'}}</p>
                                            <p><i class="fa fa-phone"></i>{{$user->phone_number?:'N/A'}}</p>
                                            <p><i class="fa fa-mobile"></i>{{$user->mobile_number?:'N/A'}}</p>
                                            <p><i class="fa fa-map-marker"></i>{{$user->address?:'N/A'}}</p>
                                        </div>
                                        <div class="col-md-3  col-sm-3">
                                            <h5 class="normal">
                                                <a href="{{route('dashboard.users.edit', $user->id)}}"
                                                   class="btn btn-primary">
                                                    <span class="">
                                                        EDIT
                                                    </span>
                                                </a>

                                            </h5>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="tiles-body">
                                        <div class="row">
                                            <div class="post col-md-12">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">Company Information</div>
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li>
                                                                    Company: {{$user->company_name?:'N/A'}}
                                                                </li>
                                                                <li>
                                                                    Registration
                                                                    Number: {{$user->company_registration_number?:'N/A'}}
                                                                </li>
                                                                <li>
                                                                    Vat/Pan Number: {{$user->vat_pan_no?:'N/A'}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">Contact Information</div>
                                                        <div class="panel-body">
                                                            <ul>
                                                                <li>
                                                                    Name: {{$user->contact_name?:'N/A'}}
                                                                </li>
                                                                <li>
                                                                    Email: {{$user->contact_email?:'N/A'}}
                                                                </li>
                                                                <li>
                                                                    Phone Number: {{$user->contact_phone_number?:'N/A'}}
                                                                </li>
                                                                <li>
                                                                    Mobile Number: {{$user->contact_mobile_number?:'N/A'}}

                                                                </li>
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
