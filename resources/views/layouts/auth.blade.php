<html lang="en" dir="{{ session()->get('app_locale') == 'ur' ? 'rtl':'' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/auth.min.css') }}" rel="stylesheet">
    <title>{{ $pageTitle??'' }}</title>
</head>
<body>
@yield('content')
<script src="{{ asset('auth/style.min.js') }}"></script>
</body>
</html>
