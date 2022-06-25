@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('plugins/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    @include('includes.datatable-js')
@endsection
@section('innerScript')
    @include('includes.datatable-general-init', ['table' => 'datatable'])
    @include('dashboard.common.add-installment-plan-modal-script')
    <script>
        let totalAmount = 0;
        let purchasePrice = 0;
        let balanceAmount = 0;
        let downPayment = 0;
        let installmentAmount = 0;

        let tempMonth;
        let tempYear;

        $(function () {
            $('.select2').select2();
            $(".mobile-mask").inputmask("(99)999 9999999");
        });

        function getFlatsOfFloor(cElement) {
            let floorID = $(cElement).val();
            let buildingID = $('#building_id').val();

            if (Number(floorID) > 0) {
                showWait();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.flats-of-floor') }}",
                    data: {'floorID': floorID, 'buildingID': buildingID},
                    success: function (result) {
                        hideWait();
                        if (result.success === true) {
                            $('#flat_id').empty().append(result.records);
                        } else {
                            showError(result.msg);
                        }
                    }
                });
            }
        }

        function getFlatDetails(cElement) {
            let floorID = $('#floor_id').val();
            let buildingID = $('#building_id').val();
            let flatID = $(cElement).val();
            if (Number(flatID) > 0) {
                showWait();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.flat-details') }}",
                    data: {'floorID': floorID, 'buildingID': buildingID, 'flatID': flatID},
                    success: function (result) {
                        hideWait();
                        if (result.success === true) {

                            $('#creation_date').val(result.creationDate);
                            $('#height').val(result.record.height);
                            $('#width').val(result.record.width);
                            $('#length').val(result.record.length);
                            $('#area').val(result.record.area);
                            $('#amount').val(result.record.total_amount);
                            $('#general_services').empty().append(result.gServices);
                            $('#security_services').empty().append(result.sServices);
                            totalAmount = Number(result.record.total_amount);
                            purchasePrice = Number(result.record.purchase_price);
                            balanceAmount = Number(result.record.total_amount);
                            $('#total_amount').val(result.record.total_amount);
                            $('.flat-details-row').fadeIn('slow');
                        } else {
                            hideWait();
                            showError(result.msg);
                        }
                    }
                });
            }
        }

        function getPaymentSubMethods(cElement) {
            let paymentMethod = $(cElement).val();
            showWait();
            $.ajax({
                type: 'POST',
                url: "{{ route('dashboard.get.sales-payment-sub-types') }}",
                data: {'paymentMethod': paymentMethod},
                success: function (result) {
                    hideWait();
                    if (result.success === true) {
                        $('#payment_sub_method').empty().append(result.data);
                    } else {
                        showError(result.msg);
                    }
                }
            });
        }

        function getInstallmentDetails() {
            let planID = $('#installment_plan_id').val();
            let installmentAmount = 0;
            if (planID > 0) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.installment-plan-details') }}",
                    data: {'planID': planID},
                    success: function (result) {
                        if (result.success === true) {
                            if (new Date().getMonth() === 12) {
                                tempMonth = 1;
                                tempYear = Number((new Date().getFullYear() + 1));
                            } else {
                                tempMonth = Number((new Date().getMonth() + 1));
                                tempYear = Number(new Date().getFullYear());
                            }

                            let totalInstallments = Number(result.record.total_installments);
                            $('#installment-body').empty().append('<tr><td>1</td><td>{{ __('general.down_payment') }}</td><td>{{ \Carbon\Carbon::today()->toDateString() }}</td><td>' + (downPayment > 0 ? formatCurrency(downPayment) : '0.00') + '<input type="hidden" name="installment[no][]" value="Down Payment"><input type="hidden" name="installment[date][]" value="{{ \Carbon\Carbon::today()->toDateString() }}"><input type="hidden" name="installment[amount][]" value="' + downPayment + '"></td></tr>');
                            for (let i = 1; i <= totalInstallments; i++) {
                                let installmentDate = getNextInstallmentDate();
                                installmentAmount = formatCurrency((balanceAmount / totalInstallments));
                                console.log([installmentAmount, balanceAmount, totalInstallments]);
                                $('#installment-body').append('<tr><td>' + (i + 1) + '</td><td>' + n2w(i) + ' {{ __('general.installment') }}</td><td>' + installmentDate + '</td><td>' + installmentAmount + '<input type="hidden" name="installment[no][]" value="' + n2w(i) + ' {{ __('general.installment') }}"><input type="hidden" name="installment[date][]" value="' + installmentDate + '"><input type="hidden" name="installment[amount][]" value="' + installmentAmount + '"></td></tr>');
                            }

                            $('#total_installments').val(totalInstallments);
                            $('#installment_amount').val(installmentAmount);
                            $('#installment_duration').val(result.record.installment_duration + ' {{ __('general.month') }}');

                            $('#installment-table-row').fadeIn('slow');
                            $('.installment-details-row').fadeIn('slow');
                        } else {
                            showError(result.msg);
                        }
                    }
                });
            }
        }

        function getNextInstallmentDate() {
            if (tempMonth === 12) {
                tempMonth = 1;
                tempYear++;
            } else {
                tempMonth++;
            }
            if (tempMonth < 10) {tempMonth = '0' + tempMonth;}
            return tempYear + '-' + tempMonth + '-01';
        }

        function calculateAmount() {
            let downPaymentType = $('#payment_type').val();
            if (downPaymentType > 0) {
                let downPaymentValue = Number($('#payment_value').val());
                if (isNaN(downPaymentValue) || downPaymentValue <= 0) {
                    downPaymentValue = 0;
                }
                if (downPaymentType == '1') {
                    balanceAmount = (totalAmount - downPaymentValue);
                    downPayment = downPaymentValue;
                } else {
                    balanceAmount = (totalAmount - ((totalAmount * downPaymentValue) / 100));
                    downPayment = ((totalAmount * downPaymentValue) / 100);
                }
                $('#payment_amount').val(formatCurrency(downPayment));
                $('#balance').val(formatCurrency(balanceAmount));

                getInstallmentDetails();
            }
        }
    </script>
@endsection
