@if ($message = \Illuminate\Support\Facades\Session::get('success'))
    <script>
        $(document).ready(function() {
            $.toast({
                heading: "{{ __('general.success') }}",
                text: "{{ $message }}",
                position: 'top-right',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
        });
    </script>
@endif
@if ($error = \Illuminate\Support\Facades\Session::get('error'))
    <script>
        $(document).ready(function() {
            $.toast({
                heading: "{{ __('general.error') }}",
                text: "{{ $error }}",
                position: 'top-right',
                icon: 'error',
                hideAfter: 3000,
                stack: 6
            });
        });
    </script>
@endif
