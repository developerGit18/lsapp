<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <div id="wrapper">
            <div class="sidebar">
                <h2>{{ config('app.name') }}</h2>
                <ul>
                    <li><a href="#">Invoice</a></li>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">Advance Credit</a></li>
                    <li><a href="#">Debit/Credit Memo</a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Adjustment Setup</a></li>
                    <li><a href="#">Setup</a></li>
                    <li><a href="#">Administrator</a></li>
                </ul>

                <!-- <div class="social-media">
                    <a href="#">F</a>
                    <a href="#">T</a>
                    <a href="#">I</a>
                </div> -->
            </div>

            <div class="main-content">
                <div class="header">Welcome!! Have a nice day.</div>
                <div class="info">
                    <div>
                        The quick brown fox jumps over the lazy dog.
                    </div>
                    <!-- @yield('content') -->
                </div>
            </div>

        </div>
    </div>
</body>
</html>
