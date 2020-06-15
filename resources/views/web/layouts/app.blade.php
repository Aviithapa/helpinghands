<!DOCTYPE html>
<html >
<head>

    @include('web.layouts.style')
    @stack('styles')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
@include('web.layouts.header')
<!-- BEGIN CONTAINER -->

@yield('content')
<!-- END CONTAINER -->
@include('web.layouts.footer')
@include('web.layouts.script')
{{--@include('admin.layouts.notification')--}}
@stack('scripts')
</body>
</html>
