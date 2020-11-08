<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{!! config('backend.name') !!}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('theme/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('theme/vendors/base/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('theme/images/favicon.png')}}" />
</head>

<body>
    @yield('content')

    <!-- plugins:js -->
    <script src="{{asset('theme/vendors/base/vendor.bundle.base.js')}}"></script>

    <!-- End plugin js for this page-->

    <script src="{{asset('theme/js/off-canvas.js')}}"></script>
    <script src="{{asset('theme/js/template.js')}}"></script>
</body>

</html>
