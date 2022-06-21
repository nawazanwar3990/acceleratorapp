<html lang="en" dir="{{ session()->get('app_locale') == 'ur' ? 'rtl':'' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('theme/css/pages/login-register-lock.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/pages/purple.css') }}" rel="stylesheet">
    <title>{{ isset($pageTitle) ? $pageTitle : '' }}</title>
</head>
<body>
    @yield('content')
    <script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('theme/js/waves.js') }}"></script>
</body>
</html>
