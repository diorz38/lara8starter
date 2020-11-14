<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.12
* @link https://tabler.io
* Copyright 2018-2020 The Tabler Authors
* Copyright 2018-2020 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4" />
    <meta name="theme-color" content="#206bc4" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="robots" content="noindex,nofollow,noarchive" />
    <link rel="icon" href="{{asset('tabler/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('tabler/favicon.ico')}}" type="image/x-icon" />

    <!-- Page CSS files -->
    @stack('page-css')

    <link href="{{asset('tabler/dist/css/tabler.min.css')}}" rel="stylesheet" />
    <link href="{{asset('tabler/dist/css/demo.min.css')}}" rel="stylesheet" />

    <style>
        body {
            display: none;
        }
    </style>
</head>

<body class="antialiased">
    <div class="page">
        @include('main::partials._navbar')
        <div class="content">
            <!-- Page Content start -->
            @yield('content')
            <!-- Page Content end -->
            @include('main::partials._footer')
        </div>
    </div>
    @include('main::pages.dashboard.modal')
    <!-- Libs JS -->
    <script src="{{asset('tabler/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('tabler/dist/libs/jquery/dist/jquery.slim.min.js')}}"></script>

    <!-- Pages JS -->
    @stack('page-js')

    <script>
        document.body.style.display = "block"
    </script>

    <!-- Tabler Core -->
    <script src="{{asset('tabler/dist/js/tabler.min.js')}}"></script>

</body>

</html>
