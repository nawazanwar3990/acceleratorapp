<html lang="en" dir="{{ session()->get('app_locale') == 'ur' ? 'rtl':'' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css-before')
    <link href="{{ asset('css/website.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/website-custom.css') }}" rel="stylesheet">
    @yield('css-after')
    <title>{{ $pageTitle??null }}</title>
</head>
<body class="bg-white">
<div class="container">
    <x-website-header></x-website-header>
    <main>
        @yield('content')
    </main>
</div>
<script src="{{ asset('js/website.min.js') }}"></script>
@include('includes.global-scripts')
<x-session-messages></x-session-messages>
@yield('inner-script-files')
@yield('innerScript')
</body>
</html>
