@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' => route('dashboard.voucher.save-buyer-installment-receiving'), 'method' => 'POST','files' => true, 'id' => 'voucher_form']) !!}
                    <x-created-by-field />

                    @include('dashboard.vouchers.components.buyer-installment-receiving-fields')
                    <x-buttons :save="true" :savePrint="true" formID="voucher_form" :reset="true" />
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="modal installment-modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">{{ __('general.installments_details') }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body" id="installment-details"></div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
@endsection
@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();
            $('.flats').select2({
                width: '100%',
                templateResult: formatFlatSelect,
            });
        });

        function formatFlatSelect(data) {
            let building = $(data.element).data('building');
            let floor = $(data.element).data('floor');
            let classAttr = $(data.element).attr('class');
            let hasClass = typeof classAttr != 'undefined';
            classAttr = hasClass ? ' ' + classAttr : '';

            return $(
                '<div class="row">' +
                '<div class="col-md-3 col-xs-3' + classAttr + '">' + data.text + '</div>' +
                '<div class="col-md-3 col-xs-3' + classAttr + '">' + building + '</div>' +
                '<div class="col-md-3 col-xs-3' + classAttr + '">' + floor + '</div>' +
                '</div>'
            );
        }

        function getInstallmentInvoiceOfFlat() {
            let flatID = $('#flat_id').val();
            showWait();
            $.ajax({
                type: 'POST',
                url: "{{ route('dashboard.get.sales-invoice-by-flat') }}",
                data: {'flatID': flatID, 'salesType': 'installment'},
                success: function (result) {
                    if (result.success === true) {
                        $('#sales').empty();
                        let data = result.data;
                        if (data.length > 0) {
                            $('#sales').append(result.data);
                            getSalesDetails();
                        } else {
                            hideWait();
                        }
                    } else {
                        showError(result.msg);
                    }
                }
            });
        }

        function getSalesDetails() {
            let salesID = $('#sales').val();

            if (salesID > 0) {
                $('#sale_id').val($('#sales').val());
                $('#details-row').fadeOut('slow');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.sales-details') }}",
                    data: {'salesID': salesID},
                    success: function (result) {
                        if (result.success === true) {
                            $('#col-owner').html(result.data.owners);
                            $('#col-date').html(result.data.date);
                            $('#col-total').html(result.data.totalAmountFormatted);
                            $('#col-down-payment').html(result.data.downPaymentFormatted);
                            $('#col-received').html(result.data.receivedAmountFormatted);
                            $('#col-last-received').html(result.data.lastReceivedFormatted);
                            $('#col-remaining').html(result.data.remainingAmountFormatted);
                            $('#col-payable').html(result.data.remainingAmountFormatted);
                            $('#payable').val(result.data.remainingAmount);
                            $('#amount').attr('max', result.data.remainingAmount)
                            $('#installments').empty().append(result.data.installments);
                            $('#installment_id').val(result.data.currentInstallment);
                            $('#installment-details').html(result.data.installmentDetails);
                            $('#details-btn').attr('href', result.data.salesDetailLink);
                            $('#details-row').fadeIn('slow');
                            $('#remarks').val($('#installments option:selected').text() + ' Payment ');
                            $('.amount-row').fadeIn('slow');
                            getInstallmentDetails();
                        } else {
                            showError(result.msg);
                        }
                    }
                });
            }
        }

        function getInstallmentDetails() {
            let installmentID = $('#installment_id').val();
            console.log('installment ' + installmentID);
            if (installmentID > 0) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.installment-details') }}",
                    data: {'installmentID': installmentID},
                    success: function (result) {
                        hideWait();
                        if (result.success === true) {
                            $('#col-installment-amount').html(result.data.installmentAmountFormatted);
                            $('#amount').attr('min', parseInt(result.data.installmentAmount)).attr('max', parseInt(result.data.installmentAmount));
                        } else {
                            showError(result.msg);
                        }
                    }
                });
            }
        }

        function applyCalculations() {
            let payableAmount = 0;
            let remainingBalance = 0;
            let amount = 0;

            payableAmount = Number($('#payable').val());
            amount = Number($('#amount').val());
            remainingBalance = (payableAmount - amount);

            if(amount > payableAmount){
                showMessage('{{ __('general.amount_should_be_less_remaining') }}')
                $('#amount').val("");
            } else {
                $('#col-payable').html( formatCurrency(remainingBalance) );
            }
        }

        function calculatePenalty() {

        }
    </script>
@endsection
