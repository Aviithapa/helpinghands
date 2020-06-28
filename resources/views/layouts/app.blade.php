<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title>{{getSiteSetting('site_title') != null? getSiteSetting('site_title'): ''}} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- BEGIN PLUGIN CSS -->
    <link href="{{asset('assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{asset('assets/plugins/bootstrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/bootstrapv3/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('assets/plugins/animate.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/register.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="{{asset('webarch/css/webarch.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END CORE CSS FRAMEWORK -->
    <style>
        .single-colored-widget .content-wrapper.yellow {
            background-color: #f3c319;
        }

        .single-colored-widget .content-wrapper.yellow p {
            color: #835819;
        }

        .text-danger {
            color: red;
        }
    </style>

    @stack('styles')

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body style="background: #8B91A0">

@yield('content')

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
@stack('scripts')

</body>
</html>
