@if ($message = \Illuminate\Support\Facades\Session::get('success'))
    <script>
        $(document).ready(function() {
            $.toast({
                heading: "{{ __('general.success') }}",
                text: "{{ $message }}",
                position: 'top-right',
                icon: 'success',
                hideAfter: 15000,
                stack: 6
            });
        });
    </script>
    {{ \Illuminate\Support\Facades\Session::forget('success') }}
@endif
@if ($message = \Illuminate\Support\Facades\Session::get('info'))
    <script>
        $(document).ready(function() {
            $.toast({
                heading: "Info",
                text: "{{ $message }}",
                position: 'top-right',
                icon: 'info',
                hideAfter: 15000,
                stack: 6
            });
        });
    </script>
    {{ \Illuminate\Support\Facades\Session::forget('info') }}
@endif
@if ($error = \Illuminate\Support\Facades\Session::get('error'))
    <script>
        $(document).ready(function() {
            $.toast({
                heading: "{{ __('general.error') }}",
                text: "{{ $error }}",
                position: 'top-right',
                icon: 'error',
                hideAfter: 15000,
                stack: 6
            });
        });
    </script>
    {{ \Illuminate\Support\Facades\Session::forget('error') }}
@endif
