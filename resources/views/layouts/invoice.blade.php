<html lang="en" dir="{{ session()->get('app_locale') == 'ur' ? 'rtl':'' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/invoice.css') }}" rel="stylesheet">
    <title>{{ $pageTitle??'' }}</title>
</head>
<body>
@yield('content')
<script src="{{ asset('js/website.min.js') }}"></script>
@yield('inner-script-files')
@yield('innerScript')
<x-session-messages></x-session-messages>
</body>
</html>
