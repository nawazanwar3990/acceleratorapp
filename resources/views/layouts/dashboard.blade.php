<html lang="en" dir="{{ session()->get('app_locale') == 'ur' ? 'rtl':'' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css-before')
    <link href="{{ asset('css/dashboard.min.css') }}" rel="stylesheet">
    @yield('css-after')
    <title>{{ $pageTitle??null }}</title>
</head>
<body class="fixed-layout skin-purple">
<x-preloader></x-preloader>
<div id="main-wrapper">
    <x-dashboard-header></x-dashboard-header>
    <x-dashboard-left-sidebar></x-dashboard-left-sidebar>
    <div class="page-wrapper">
        <div class="container-fluid" style="margin-right: 220px;">
            <x-breadcrumb :pageTitle="$pageTitle ?? ''"></x-breadcrumb>
            @yield('content')
        </div>
    </div>
    @include('components.floating-action-button')
    <x-dashboard-footer></x-dashboard-footer>
</div>
<script>
    window.laravel_echo_port = '{{ config('app.laravel_echo_port') }}';
</script>
<script src="{{ config('app.url') }}:{{ config('app.laravel_echo_port') }}/socket.io/socket.io.js"></script>
<script src="{{ asset('js/laravel-echo-setup.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/dashboard.min.js') }}"></script>
@include('includes.global-scripts')
<x-session-messages></x-session-messages>
@yield('inner-script-files')
@yield('innerScript')
<script>
    window.Laravel = {
        'csrfToken': '{{ csrf_token() }}',
        'user': '{{ \Illuminate\Support\Facades\Auth::id() }}'
    };
    window.Echo.channel('pending.installments')
        .listen('.PendingInstallments', (data) => {
            $(data.notifications).each(function (key, notification) {
                $.toast({
                    heading: 'Alert',
                    icon: 'info',
                    text: notification.data.trim(),
                    position: 'top-right',
                    hideAfter: false,
                    bgColor: '#FF1356',
                    textColor: 'white'
                })
            });
        });
</script>
</body>
</html>
