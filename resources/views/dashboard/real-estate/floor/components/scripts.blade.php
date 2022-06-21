@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
@endsection
@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();

            $(".vertical-spin").TouchSpin({
                min: 1,
                max: 1000,
                step: 1,
                boostat: 5,
                maxboostedstep: 10,
                verticalbuttons: true,
            });
        });

        function calculateArea() {
            let width = Number($('#width').val());
            if (isNaN(width)) {
                width = 0;
            }
            let length = Number($('#length').val());
            if (isNaN(length)) {
                length = 0;
            }
            $('#area').val((width * length));
            $('#area_view').val((width * length));
        }
    </script>
@endsection
