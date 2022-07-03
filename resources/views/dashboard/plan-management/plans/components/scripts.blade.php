@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
@endsection
@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();
            $(".vertical-spin").TouchSpin({
                min: 12,
                max: 120,
                step: 1,
                boostat: 2,
                maxboostedstep: 5,
                verticalbuttons: true,
            });

            @if (isset($for))
                $('#months').val({{$model->months}});
            @endif
        });

        $('#penalties').on('change', function () {
            if ($(this).prop('checked')) {
                $('.penalty-row').fadeIn('slow');
            } else {
                $('.penalty-row').fadeOut('slow');
            }
        });

        $('#first_penalty').on('change', function () {
            let value = $(this).prop('checked');
            $('#first_penalty_days').attr('disabled', !value).attr('required', value);
            $('#first_penalty_type').attr('disabled', !value).attr('required', value);
            $('#first_penalty_charges').attr('disabled', !value).attr('required', value);
        });
        $('#second_penalty').on('change', function () {
            let value = $(this).prop('checked');
            $('#second_penalty_days').attr('disabled', !value).attr('required', value);
            $('#second_penalty_type').attr('disabled', !value).attr('required', value);
            $('#second_penalty_charges').attr('disabled', !value).attr('required', value);
        });
        $('#third_penalty').on('change', function () {
            let value = $(this).prop('checked');
            $('#third_penalty_days').attr('disabled', !value).attr('required', value);
            $('#third_penalty_type').attr('disabled', !value).attr('required', value);
            $('#third_penalty_charges').attr('disabled', !value).attr('required', value);
        });

        function calculateInstallments() {
            let months = Number($('#months').val());
            let duration = Number($('#installment_duration').val());
            if (months > 0 && duration > 0) {
                let totalInstallments = (months / duration) ;
                $('#total_installments').val(totalInstallments);
            }
        }
    </script>
@endsection
