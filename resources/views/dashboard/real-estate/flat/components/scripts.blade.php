@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    @include('includes.datatable-js')
@endsection
@section('innerScript')
    @include('dashboard.real-estate.common.hr-picker-script')
    <script>
        let availableArea = -1;
        $(function () {
            $('.select2').select2();
            @if(isset($for))
                getFloorDetails(true);
            @endif

        });
        $('#furnished').on('change', function () {
            if ($(this).prop('checked')) {
                $('#furnished_details').show('slow');
            } else {
                $('#furnished_details').hide('slow');
            }
        });

        function calculateArea() {
            let width = Number($('#width').val());
            let tempWidth;

            if (isNaN(width)) {
                width = 0;
            }
            if (width > 0) {
                let splitWidth = width.toString().split('.');
                if (splitWidth.length > 1) {
                    tempWidth = ( Number(splitWidth[0]) + (Number(splitWidth[1]) /12 ) );
                } else {
                    tempWidth = width;
                }
            } else {
                tempWidth = 0;
            }


            let length = Number($('#length').val());
            let tempLength;

            if (isNaN(length)) {
                length = 0;
            }
            if (length > 0) {
                let splitLength = length.toString().split('.');
                if (splitLength.length > 1) {
                    tempLength = ( Number(splitLength[0]) + (Number(splitLength[1]) /12 ) );
                } else {
                    tempLength = length;
                }
            } else {
                tempLength = 0;
            }

            let area = (Number(tempWidth) * Number(tempLength));
            if (area > availableArea) {
                showError('{{ __('general.area_should_less_than_available_area') }}');
                $('#width').val('');
                $('#length').val('');
                return false;
            }
            $('#area').val(area);
            $('#area_view').val(area);

            if ($('#rate_type_sft').prop('checked')) {
                let saleRateSFT = Number($('#rate_square_feat').val());
                let purchaseRateSFT = Number($('#purchase_rate_square_feet').val());

                if (isNaN(saleRateSFT)) {
                    saleRateSFT = 0;
                }
                if (isNaN(purchaseRateSFT)) {
                    purchaseRateSFT = 0;
                }
                $('#total_amount').val( formatCurrency(area * saleRateSFT));
                $('#purchase_price').val( formatCurrency(area * purchaseRateSFT));
            }
        }

        $('.rate-type').on('change', function(){
            if ($(this).val() === 'sft') {
                $('#rate_square_feat').attr('readonly', false);
                $('#rate_square_feat').attr('required', true);
                $('#total_amount').attr('readonly', true);
                $('#total_amount').attr('required', false);

                $('#purchase_rate_square_feet').attr('readonly', false)
                $('#purchase_rate_square_feet').attr('required', true)
                $('#purchase_price').attr('readonly', true)
                $('#purchase_price').attr('required', false)
            } else {
                $('#rate_square_feat').attr('readonly', true);
                $('#rate_square_feat').attr('required', false);
                $('#total_amount').attr('readonly', false);
                $('#total_amount').attr('required', true);

                $('#purchase_rate_square_feet').attr('readonly', true)
                $('#purchase_rate_square_feet').attr('required', false)
                $('#purchase_price').attr('readonly', false)
                $('#purchase_price').attr('required', true)
            }
        });

        function getFloorDetails(forEdit = false) {
            let floorID;
            floorID = $('#floor_id').val();
            if (floorID > 0) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.floor-details') }}",
                    data: {'floorID': floorID},
                    success: function (result) {
                        if (result.success === true) {
                            $('#height').val(result.model.height);
                            $('#totalArea').html(result.model.area);
                            $('#availableArea').html(result.availableArea);
                            availableArea = result.availableArea;
                        } else {
                            showError(result.msg);
                        }
                    },
                    complete: function() {
                        if (forEdit === true) {
                            calculateArea();
                        }
                    }
                });
            }
        }

    </script>
@endsection
