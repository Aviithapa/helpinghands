@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row login-container animated fadeInUp" style="margin-top: 5%;">
            <div class="col-md-7 col-md-offset-2 tiles white no-padding">
                <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">
                    <h2 class="normal">
                        Register Bahan as {{strtoupper($role)}}
                    </h2>
                </div>
                <div class="tiles grey p-t-20 p-b-20 no-margin text-black tab-content">
                    <div>
                        <form class="animated fadeIn" method="POST" action="{{ route('register', [$role]) }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                                <label for="user_name" class="col-md-4 control-label">User Name</label>

                                <div class="col-md-6">
                                    <input id="user_name" type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" required autofocus>

                                    @if ($errors->has('user_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Phone Number</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required>

                                    @if ($errors->has('phone_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                                <label for="mobile_number" class="col-md-4 control-label">Mobile Number</label>

                                <div class="col-md-6">
                                    <input id="mobile_number" type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}" required>

                                    @if ($errors->has('mobile_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            @if($role != 'travel_guide')
                                <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                                    <label for="company_name" class="col-md-4 control-label">Company Name</label>

                                    <div class="col-md-6">
                                        <input id="company_name" type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" required>

                                        @if ($errors->has('company_name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('company_registration_number') ? ' has-error' : '' }}">
                                    <label for="company_registration_number" class="col-md-4 control-label">Company Registration Number</label>

                                    <div class="col-md-6">
                                        <input id="company_registration_number" type="text" class="form-control" name="company_registration_number" value="{{ old('company_registration_number') }}" required>

                                        @if ($errors->has('company_registration_number'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('company_registration_number') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('vat_pan_no') ? ' has-error' : '' }}">
                                    <label for="vat_pan_no" class="col-md-4 control-label">Vat/Pan Number</label>

                                    <div class="col-md-6">
                                        <input id="vat_pan_no" type="text" class="form-control" name="vat_pan_no" value="{{ old('vat_pan_no') }}" required>

                                        @if ($errors->has('vat_pan_no'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('vat_pan_no') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
                                <label for="contact_name" class="col-md-4 control-label">Contact Name</label>

                                <div class="col-md-6">
                                    <input id="contact_name" type="text" class="form-control" name="contact_name" value="{{ old('contact_name') }}" required>

                                    @if ($errors->has('contact_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contact_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
                                <label for="contact_email" class="col-md-4 control-label">Contact Email</label>

                                <div class="col-md-6">
                                    <input id="contact_email" type="text" class="form-control" name="contact_email" value="{{ old('contact_email') }}" required>

                                    @if ($errors->has('contact_email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contact_email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('contact_phone_number') ? ' has-error' : '' }}">
                                <label for="contact_phone_number" class="col-md-4 control-label">Contact Phone Number</label>

                                <div class="col-md-6">
                                    <input id="contact_phone_number" type="text" class="form-control" name="contact_phone_number" value="{{ old('contact_phone_number') }}" required>

                                    @if ($errors->has('contact_phone_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contact_phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('contact_mobile_number') ? ' has-error' : '' }}">
                                <label for="contact_mobile_number" class="col-md-4 control-label">Contact Mobile Number</label>

                                <div class="col-md-6">
                                    <input id="contact_mobile_number" type="text" class="form-control" name="contact_mobile_number" value="{{ old('contact_mobile_number') }}" required>

                                    @if ($errors->has('contact_mobile_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contact_phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
