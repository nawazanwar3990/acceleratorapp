@section('innerScript')
    <script>
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
