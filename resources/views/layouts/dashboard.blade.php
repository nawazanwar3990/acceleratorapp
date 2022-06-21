<html lang="en" dir="{{ session()->get('app_locale') == 'ur' ? 'rtl':'' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css-before')
    <link href="{{ asset('theme/icons/bx-font/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/pages/purple.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/pages/floating-action-button.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/jqueryui/jquery-ui.css') }}" rel="stylesheet">
    @yield('css-after')
    <link href="{{ asset('theme/css/custom.css') }}" rel="stylesheet">
    <title>{{ isset($pageTitle) ? $pageTitle : '' }}</title>
</head>
<body class="fixed-layout skin-purple">
{{--<x-preloader/>--}}
<div id="main-wrapper">
    <x-dashboard-header/>
    <x-dashboard-left-sidebar/>
    <div class="page-wrapper">
        <div class="container-fluid" style="margin-right: 220px;">
            <x-breadcrumb :pageTitle="$pageTitle ?? ''"></x-breadcrumb>
            @yield('content')
        </div>
    </div>
    @include('components.floating-action-button')
    <x-dashboard-footer/>
</div>
<script>
    window.laravel_echo_port = '{{ config('app.laravel_echo_port') }}';
</script>
<script src="{{ config('app.url') }}:{{ config('app.laravel_echo_port') }}/socket.io/socket.io.js"></script>
<script src="{{ asset('js/laravel-echo-setup.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/moment/moment.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('theme/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script src="{{ asset('plugins/toast-master/js/jquery.toast.js') }}"></script>
<script src="{{ asset('plugins/parsley-js/parsley.js') }}"></script>
<script src="{{ asset('plugins/printArea/jquery.PrintArea.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('theme/js/waves.js') }}"></script>
<script src="{{ asset('theme/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('plugins/jqueryui/jquery-ui.js') }}"></script>
<script src="{{ asset('theme/js/custom.min.js') }}"></script>
<script src="{{ asset('theme/js/nav-search-box.js') }}"></script>
@include('includes.global-scripts')
<x-session-messages />
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
