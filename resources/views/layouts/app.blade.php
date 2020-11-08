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
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('theme/images/favicon.png')}}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('backend::partials._main')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            {{-- @include('backend::partials._sidebar') --}}
            <!-- partial -->
            @yield('content')
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('theme/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('theme/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('theme/js/off-canvas.js')}}"></script>
    <script src="{{asset('theme/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('theme/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    @stack('page-script')
    <!-- End custom js for this page-->
</body>

</html>
