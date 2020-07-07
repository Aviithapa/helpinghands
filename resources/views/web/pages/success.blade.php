<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>{{getSiteSetting('site_title')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="{{asset('assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('assets/plugins/bootstrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/bootstrapv3/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('assets/plugins/animate.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />

    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="{{asset('webarch/css/webarch.css')}}" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
    <style>
        .single-colored-widget .content-wrapper.yellow {
            background-color: #f3c319;
        }
        .single-colored-widget .content-wrapper.yellow p {
            color: #835819;
        }
    </style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
<div class="container">
    <div class="row login-container animated fadeInUp">
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
            <button onclick="goBack()" style="font-size: 25px;" class="close">&bigotimes;</button>
            <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">
                    <h2 class="text-danger">
                        Warning
                    </h2>
            </div>
            <div class="tiles grey p-t-20 p-b-20 no-margin text-black tab-content">
                <div class="text-center text-danger">
                    Your Request be submitted only submitted after uploading bank voucher through your account where<br>
                    Email : Your Email<br>
                    Password: Your Phone Number <br>
                </div>
            </div>
            <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">
                <h4>You can find out you bank details after login</h4>
            </div>
            <div class="tiles grey p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 text-black tab-content">
                <a href="/" class="btn btn-info btn-cons" title="Register">
                    Continue to site
                </a>
                <a href="{{url('login')}}" class="btn btn-info btn-cons" title="Register">
                    Go to login
                </a>
            </div>
        </div>
    </div>
</div>

<!-- END CONTAINER -->
<script src="{{asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
<!-- BEGIN JS DEPENDECENCIES-->
<script src="{{asset('assets/plugins/jquery/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrapv3/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-block-ui/jqueryblockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-select2/select2.min.js')}}" type="text/javascript"></script>
<!-- END CORE JS DEPENDECENCIES-->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="{{asset('webarch/js/webarch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/chat.js')}}" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<script>
    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>
