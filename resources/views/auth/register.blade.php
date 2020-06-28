@extends('layouts.app')

@section('content')


{{--    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">--}}
{{--        <div class="wrapper wrapper--w680">--}}
{{--            <div class="card card-1">--}}
{{--                <div class="card-heading"></div>--}}
{{--                <div class="card-body">--}}
{{--                    <h2 class="title">Register  as {{strtoupper($role)}}</h2>--}}
{{--                    <form method="POST" action="{{ route('register', [$role]) }}">--}}
{{--                      {{csrf_field()}}--}}

{{--                        <div class="input-group">--}}
{{--                            <input class="input--style-1" type="text" placeholder="NAME" name="name" value="{{ old('name') }}">--}}
{{--                        </div>--}}

{{--                        <div class="row row-space">--}}
{{--                            <div class="col-2">--}}
{{--                                <div class="input-group{{ $errors->has('user_name') ? ' has-error' : '' }}">--}}
{{--                                        <input id="user_name" type="text" class="input--style-1" name="user_name" placeholder="User Name" value="{{ old('user_name') }}" required autofocus>--}}

{{--                                        @if ($errors->has('user_name'))--}}
{{--                                            <span class="help-block">--}}
{{--                                            <strong>{{ $errors->first('user_name') }}</strong>--}}
{{--                                        </span>--}}
{{--                                        @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-2">--}}
{{--                                    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--                                       <input id="email" type="email" class="input--style-1" placeholder="Email"  name="email" value="{{ old('email') }}" required>--}}

{{--                                            @if ($errors->has('email'))--}}
{{--                                                <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                            @endif--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                        </div>--}}

{{--                        <div class="row row-space">--}}
{{--                            <div class="col-2">--}}
{{--                                <div class="input-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">--}}
{{--                                    <input id="phone_number" type="number" class="input--style-1" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required autofocus>--}}

{{--                                    @if ($errors->has('phone_number'))--}}
{{--                                        <span class="help-block">--}}
{{--                                            <strong>{{ $errors->first('phone_number') }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-2">--}}
{{--                                <div class="input-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">--}}
{{--                                    <input id="mobile_number" type="number" class="input--style-1" placeholder="Mobile Number"  name="mobile_number" value="{{ old('mobile_number') }}" required>--}}

{{--                                    @if ($errors->has('mobile_number'))--}}
{{--                                        <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('mobile_number') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row row-space">--}}
{{--                            <div class="col-2">--}}
{{--                                <div class="input-group{{ $errors->has('address') ? ' has-error' : '' }}">--}}
{{--                                    <input id="address" type="text" class="input--style-1" name="address" placeholder="Address" value="{{ old('address') }}" required autofocus>--}}

{{--                                    @if ($errors->has('address'))--}}
{{--                                        <span class="help-block">--}}
{{--                                            <strong>{{ $errors->first('address') }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-2">--}}
{{--                                <div class="input-group{{ $errors->has('company_name') ? ' has-error' : '' }}">--}}
{{--                                    <input id="company_name" type="text" class="input--style-1" placeholder="company_name"  name="company_name" value="{{ old('company_name') }}" required>--}}

{{--                                    @if ($errors->has('company_name'))--}}
{{--                                        <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('company_name') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row row-space">--}}
{{--                            <div class="col-2">--}}
{{--                                <div class="input-group{{ $errors->has('company_registration_number') ? ' has-error' : '' }}">--}}
{{--                                    <input id="company_registration_number" type="text" class="input--style-1" name="company_registration_number" placeholder="company_registration_number" value="{{ old('company_registration_number') }}" required autofocus>--}}

{{--                                    @if ($errors->has('company_registration_number'))--}}
{{--                                        <span class="help-block">--}}
{{--                                            <strong>{{ $errors->first('company_registration_number') }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-2">--}}
{{--                                <div class="input-group{{ $errors->has('vat_pan_no') ? ' has-error' : '' }}">--}}
{{--                                    <input id="vat_pan_no" type="text" class="input--style-1" placeholder="vat_pan_no"  name="vat_pan_no" value="{{ old('vat_pan_no') }}" required>--}}

{{--                                    @if ($errors->has('vat_pan_no'))--}}
{{--                                        <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('vat_pan_no') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="row row-space">--}}
{{--                            <div class="col-2">--}}
{{--                                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--                                    <input id="password" type="password" class="input--style-1" name="password" placeholder="password"  required autofocus>--}}

{{--                                    @if ($errors->has('password'))--}}
{{--                                        <span class="help-block">--}}
{{--                                            <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-2">--}}
{{--                                <div class="input-group">--}}
{{--                                    <input id="password-confirm" type="password" class="input--style-1" placeholder="password-confirm"  name="password-confirm"  required>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="p-t-20">--}}
{{--                            <button class="btn btn--radius btn--green" type="submit">Register</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<div class="container">
    <div class="row login-container animated fadeInUp" style="margin-top: 5%;">
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
            <button onclick="goBack()" style="font-size: 25px;" class="close">&bigotimes;</button>


            <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">
                <h2 class="normal">
                    Register  as Event Organizer
                </h2>
            </div>
            <div class="tiles grey p-t-20 p-b-20 no-margin text-black tab-content">
                <div>
                    <form class="animated fadeIn" method="POST" action="{{ route('register', [$role]) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >
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
                            <label for="mobile_number" class="col-md-4 control-label">Mobile Number (Optional)</label>

                            <div class="col-md-6">
                                <input id="mobile_number" type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}" >

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

                        <div class="form-group" >
                            <div class="col-md-6 col-md-offset-4" style="padding-top: 30px">
                                  <button type="submit" class="btn btn-primary  btn-lg">
                                        Register Now
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
@push('scripts')

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    @endpush
