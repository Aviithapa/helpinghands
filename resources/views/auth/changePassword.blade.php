@extends('web.layouts.app')

@section('content')
    <section class="section"></section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-8 col-lg-5 col-xl-4 mb-5 mb-md-0">
                    <div class="bg-primary rounded p-5">
                        <h2 class="text-color-light font-weight-bold text-4 mb-4">Reset Password</h2>

                        <form action="{{route('change-password.store')}}" id="resetPassword" method="post" >
                            {{ csrf_field() }}
                            <input type="hidden" name="code" value="{{$code}}">
                            <div class="form-row">
                                <div class="form-group col mb-2">
                                    <label class="text-color-light-2" for="shopLoginSignInEmail">New Password</label>
                                    <input type="password" value="" maxlength="100" class="form-control bg-light border-0 rounded text-1" name="password" id="password" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="text-color-light-2" for="shopLoginSignInPassword">CONFIRM PASSWORD</label>
                                    <input type="password" value="" class="form-control bg-light border-0 rounded text-1" name="confirm_password" id="confirm_password" required>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">Reset Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @push('scripts')
   <script>
       $("#resetPassword").validate({
           rules: {
               password: {
                   required: true,
                   minlength: 6,
//                   maxlength: 10,

               } ,

               confirm_password: {
                   equalTo: "#password",
                   minlength: 6,
//                   maxlength: 10
               }


           },
           messages:{
               password: {
                   required:"the password is required"

               }
           }

       });
   </script>
    @endpush
    @endsection