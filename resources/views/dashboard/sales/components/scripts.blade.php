@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
    <script src="{{ url('plugins/dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ url('plugins/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
    @include('includes.datatable-js')
@endsection
@section('innerScript')
    @include('dashboard.common.hr-picker-script')
    @include('dashboard.common.add-hr-modal-script')
    @include('dashboard.common.add-installment-plan-modal-script')
    <script>

        let totalAmount = 0;
        let originalTotalAmount = 0;
        let downPayment = 0;
        let balanceAmount = 0;
        let afterDiscountAmount = 0;
        let brokerAmount = 0;
        let purchasePrice = 0;
        let totalArea = 0;
        let commodityPrice = 0;
        let totalInstallments

        let tempMonth;
        let tempYear;

        $(function () {
            $('.select2').select2();
            $(".cnic-mask").inputmask("99999-9999999-9");
            $(".mobile-mask").inputmask("(99)999 9999999");
            initDropify();
        });

        function getFloorsOfBuilding(cElement) {
            let buildingID = $(cElement).val();
            showWait();

            $.ajax({
                type: 'POST',
                url: "{{ route('dashboard.get.floors-of-building') }}",
                data: {'buildingID': buildingID},
                success: function (result) {
                    hideWait();
                    if (result.success === true) {
                        $('#floor_id').empty().append(result.records);
                        $('#flat_id').empty();
                    } else {
                        showError(result.msg);
                    }
                }
            });
        }

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
                            originalTotalAmount = Number(result.record.total_amount);
                            purchasePrice = Number(result.record.purchase_price);
                            totalArea = Number(result.record.area);
                            $('.flat-details-row').fadeIn('slow');
                            getFlatOwners(flatID, buildingID);
                            getFlatRevisions(flatID);
                            if ($('#total_amount').length) {
                                $('#total_amount').val(originalTotalAmount);
                                $('#total_broker_amount').val(formatCurrency(brokerAmount));
                            }
                        } else {
                            hideWait();
                            showError(result.msg);
                        }
                    }
                });
            }
        }

        function getFlatOwners(flatID, buildingID) {
            $.ajax({
                type: 'POST',
                url: "{{ route('dashboard.get.flat-owners') }}",
                data: {'flatID': flatID, 'buildingID': buildingID},
                success: function (result) {
                    if (result.success === true) {
                        $('#sellers_body').empty().append(result.data);
                    } else {
                        showError(result.msg);
                    }
                }
            });
        }

        function getFlatRevisions(flatID) {
            $.ajax({
                type: 'POST',
                url: "{{ route('dashboard.get.flat-revisions') }}",
                data: {'flatID': flatID},
                success: function (result) {
                    hideWait();
                    if (result.success === true) {
                        $('#revision_no').val(result.data);
                    } else {
                        showError(result.msg);
                    }
                }
            });
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

        function setPaymentView() {
            let paymentMethod = $('#payment_method').val();
            let paymentSubMethod = $('#payment_sub_method').val();
            let finalMethod = (paymentMethod + '-' + paymentSubMethod);

            showWait();
            $.ajax({
                type: 'POST',
                url: "{{ route('dashboard.get.sales-payment-view') }}",
                data: {'viewCode': finalMethod},
                success: function (result) {
                    hideWait();
                    if (result.success === true) {
                        $('#render-area').fadeOut('slow', function() {
                            $('#render-area').empty().html(result.data).fadeIn('slow');
                            $('#render-area .select2').select2();
                            $('#total_amount').val(originalTotalAmount);
                            $('#total_broker_amount').val(formatCurrency(brokerAmount));
                            // $('#purchase_price').val(formatCurrency(purchasePrice));

                            totalAmount = originalTotalAmount;
                            $(".vertical-spin").TouchSpin({
                                min: 0,
                                max: 20,
                                step: 0.1,
                                decimals: 2,
                                boostat: 1,
                                maxboostedstep: 5,
                                verticalbuttons: true,
                            });
                            $('[data-bs-toggle="tooltip"]').tooltip({html: true});
                        })
                    } else {
                        showError(result.msg);
                    }
                }
            });
            applyCalculation();
        }

        function applyCalculation() {
            totalAmount = Number($('#total_amount').val());
            if (isNaN(totalAmount) || totalAmount <= 0) {
                totalAmount = 0;
            }
            downPayment = Number($('#down_payment').val());
            if (isNaN(downPayment) || downPayment <= 0) {
                downPayment = 0;
            }

            let discountType = Number($('#discount').val());
            let discountValue = Number($('#discount_value').val());
            if (isNaN(discountValue) || discountValue <= 0) {
                discountValue = 0;
            }
            let discountAmount;

            if (discountType == 1) { //Fixed
                discountAmount = discountValue;
            } else if (discountType == 2) { //Percentage
                discountAmount = Number((totalAmount * discountValue) / 100);
            } else if (discountType == 3) { //Per Sq. Feet
                discountAmount = Number((totalArea * discountValue));
            } else {
                discountAmount = 0;
            }
            afterDiscountAmount = (totalAmount - discountAmount);

            if (commodityPrice > 0) {
                let diffAmount = Number($('#difference').val());
                if (diffAmount > 0) {
                    balanceAmount = ((afterDiscountAmount - diffAmount) - downPayment);
                } else {
                    let receiveRemainingCheck = ($('#receive_remaining').is(":checked"));
                    if (receiveRemainingCheck === true) {
                        balanceAmount = (afterDiscountAmount - commodityPrice - (diffAmount * -1));
                    } else {
                        balanceAmount = (afterDiscountAmount - downPayment + (diffAmount * -1));
                    }
                }
            } else {
                balanceAmount = (afterDiscountAmount - downPayment);
            }
            let brokerPercentage = Number($('#total_broker_percentage').val());
            if (isNaN(brokerPercentage) || brokerPercentage <= 0) {
                brokerPercentage = 0;
            }
            brokerAmount = ((afterDiscountAmount * brokerPercentage) / 100);
            $('#total_broker_amount').val(brokerAmount === 0 ? '0.00' : formatCurrency(brokerAmount));
            $('#balance').val(balanceAmount === 0 ? '0.00' : formatCurrency(balanceAmount));
            $('#discount_amount').val(discountValue === 0 ? '0.00' : formatCurrency(discountAmount));
            $('#after_discount_amount').val(afterDiscountAmount === 0 ? '0.00' : formatCurrency(afterDiscountAmount));

            calculateInstallments();
        }

        function getCommoditySubTypes() {
            let commodityType = $('#commodity_type_id').val();

            if (commodityType != '') {
                showWait();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.commodity-sub-types') }}",
                    data: {'commodityType': commodityType},
                    success: function (result) {
                        hideWait();
                        if (result.success === true) {
                            $('#commodity_sub_type_id').empty().append(result.records);
                        } else {
                            showError(result.msg);
                        }
                    }
                });
            }
        }

        function getInstallmentDetails() {
            let planID = $('#installment_plan_id').val();

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

                            totalInstallments = Number(result.record.total_installments);
                            if (result.record.down_payment_type == 1) {
                                downPayment = Number(result.record.down_payment_value);
                            } else {
                                downPayment = ( (totalAmount * Number(result.record.down_payment_value)) / 100);
                            }
                            $('#down_payment').val(downPayment);
                            $('#installment_duration').val(result.record.installment_duration + ' {{ __('general.month') }}');
                            calculateInstallments();
                            calculateCommodityPrice();
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

        function updateBrokerView() {
            if ($('#company_brokery').prop('checked')) {
                $('.broker-row').fadeOut('slow');
                $('.broker-row .hr-id').attr('required', false);
            } else {
                $('.broker-row').fadeIn('slow');
                $('.broker-row .hr-id').attr('required', true);
            }
        }

        $( "#add-installment-plan-modal" ).on('shown.bs.modal', function(){
            $(".month-vertical-spin").TouchSpin({
                min: 0,
                max: 120,
                step: 1,
                decimals: 0,
                boostat: 5,
                maxboostedstep: 10,
                verticalbuttons: true,
            });
            $('#installment_modal_installment_duration').select2({
                dropdownParent: $( "#add-installment-plan-modal" )
            });
        });

        function cloneCommodityRow(cElement) {

            let clone = $(cElement).closest('tr').clone();
            $(clone).find('input[type=text]').val('');
            $(clone).find('input[type=number]').val('');
            $(clone).find('input[type=hidden]').val('');
            $(clone).find('.comm-type').val($(cElement).closest('tr').find('.comm-type').val());
            $(clone).find('.comm-value').val($(cElement).closest('tr').find('.comm-value').val());
            $(cElement).closest('tbody').append(clone);
            $('#no_of_units').val($('#commodity-table >tbody >tr').length);
        }

        function removeCommodityClonedRow(cElement) {
            let length = $(cElement).closest('tbody').find('tr').length;
            if (length > 1) {
                $(cElement).closest('tr').remove();
                calculateCommodityPrice();
            } else {
                showError("At least one row is required.");
            }
            $('#no_of_units').val($('#commodity-table >tbody >tr').length);
        }

        function calculateCommodityPrice() {
            commodityPrice = 0;
            let downPaymentValue = Number($('#down_payment').val());

            $('.comm-price').each(function() {
                let price = Number($(this).val());
                if ($(this).closest('tr').find('.comm-total-price').length) {
                    let qty = Number($(this).closest('tr').find('.comm-size').val());
                    commodityPrice += (price * qty);
                    $(this).closest('tr').find('.comm-total-price').val((price * qty))
                } else {
                    commodityPrice += price;
                }
            });
            $('#price_value').val(formatCurrency(commodityPrice));

            $('#difference').val(commodityPrice - downPaymentValue);

            applyCalculation();
        }

        function calculateInstallments() {
            let installmentAmount = 0;
            $('#installment-body').empty().append('<tr><td>1</td><td>{{ __('general.down_payment') }}</td><td>{{ \Carbon\Carbon::today()->toDateString() }}</td><td>' + (downPayment > 0 ? formatCurrency(downPayment) : '0.00') + '<input type="hidden" name="installment[no][]" value="Down Payment"><input type="hidden" name="installment[date][]" value="{{ \Carbon\Carbon::today()->toDateString() }}"><input type="hidden" name="installment[amount][]" value="' + downPayment + '"></td></tr>');
            for (let i = 1; i <= totalInstallments; i++) {
                let installmentDate = getNextInstallmentDate();
                installmentAmount = formatCurrency((balanceAmount / totalInstallments));
                $('#installment-body').append('<tr><td>' + (i + 1) + '</td><td>' + n2w(i) + ' {{ __('general.installment') }}</td><td>' + installmentDate + '</td><td>' + installmentAmount + '<input type="hidden" name="installment[no][]" value="' + n2w(i) + ' {{ __('general.installment') }}"><input type="hidden" name="installment[date][]" value="' + installmentDate + '"><input type="hidden" name="installment[amount][]" value="' + installmentAmount + '"></td></tr>');
            }

            $('#total_installments').val(totalInstallments);
            $('#installment_amount').val(installmentAmount);


            $('#installment-table-row').fadeIn('slow');
            $('.installment-details-row').fadeIn('slow');
        }

        function setCommodityView() {
            let commodityType = $('#commodity_type_id').val();
            let commoditySubType = $('#commodity_sub_type_id option:selected').text();
            let commoditySubTypeValue = $('#commodity_sub_type_id').val();

            showWait();
            $.ajax({
                type: 'POST',
                url: "{{ route('dashboard.get.sales-commodity-view') }}",
                data: {'viewCode': commodityType},
                success: function (result) {
                    hideWait();
                    if (result.success === true) {
                        $('#commodity-render-area').fadeOut('slow', function() {
                            $('#commodity-render-area').empty().html(result.data).fadeIn('slow');
                            $('#commodity-render-area .select2').select2();
                            $('.comm-type').each(function() {
                                $(this).val(commoditySubType);
                            });
                            $('.comm-value').each(function() {
                                $(this).val(commoditySubTypeValue);
                            });
                            $('[data-bs-toggle="tooltip"]').tooltip({html: true});
                        })
                    } else {
                        showError(result.msg);
                    }
                }
            });
        }
    </script>
@endsection

