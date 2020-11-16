<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PILKADES - {{config('global.desa.nama')}}.</title>
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
    <!-- CSS files -->
    <link href="{{asset('tabler/dist/css/tabler.min.css')}}" rel="stylesheet" />
    <link href="{{asset('tabler/dist/css/tabler-flags.min.css')}}" rel="stylesheet" />
    <link href="{{asset('tabler/dist/css/tabler-payments.min.css')}}" rel="stylesheet" />
    <link href="{{asset('tabler/dist/css/demo.min.css')}}" rel="stylesheet" />
    <style>
        body {
            display: none;
        }
    </style>
</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center">
        <div class="container-tight py-6">
            <div class="text-center mb-5">
                <a href="."><img src="{{asset('tabler/static/logo.svg')}}" height="36" alt=""></a>
            </div>
            <form class="card card-md" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-body">
                    <h2 class="mb-5 text-center">Login to your account</h2>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input id="email" name="email" type="email" class="form-control" placeholder="Enter email" autocomplete="off">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                            <span class="form-label-description">
                                <a href="./forgot-password.html">I forgot password</a>
                            </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password" data-toggle="tooltip"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="12" cy="12" r="2" />
                                        <path
                                            d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                        </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label">Remember me on this device</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                </div>

            </form>
            <div class="text-center text-muted mt">
                Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <script src="{{asset('tabler/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Tabler Core -->
    <script src="{{asset('tabler/dist/js/tabler.min.js')}}"></script>
    <script>
        document.body.style.display = "block"
    </script>
</body>

</html>
