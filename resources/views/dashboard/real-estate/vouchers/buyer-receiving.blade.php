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
                    {!! Form::open(['url' => route('dashboard.voucher.save-buyer-receiving'), 'method' => 'POST','files' => true, 'id' => 'voucher_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field />
                    <x-hidden-building-id />
                    @include('dashboard.real-estate.vouchers.components.buyer-receiving-fields')
                    <x-buttons :save="true" :savePrint="true" formID="voucher_form" :reset="true" />
                    {!! Form::close() !!}
                </div>
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

        function getInvoiceOfFlat() {
            let flatID = $('#flat_id').val();
            if (flatID > 0) {
                showWait();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.sales-invoice-by-flat') }}",
                    data: {'flatID': flatID, 'salesType': 'one-time'},
                    success: function (result) {
                        if (result.success == true) {
                            $('#sales').empty();
                            let data = result.data;
                            if (data.length > 0) {
                                $('#sales').append(result.data);
                                $('#sales-inv-row').fadeIn('slow');
                                getSalesDetails();
                            } else {
                                hideWait();
                            }
                        }
                    }
                });
            }
        }

        function getSalesDetails() {
            let salesID = $('#sales').val();
            if (salesID > 0) {
                $('#sales_id').val(salesID);
                $('#details-row').fadeOut('slow');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.sales-details') }}",
                    data: {'salesID': salesID},
                    success: function (result) {

                        if (result.success == true) {
                            hideWait();
                            $('#col-owner').html(result.data.owners);
                            $('#col-date').html(result.data.date);
                            $('#col-total').html(result.data.totalAmountFormatted);
                            $('#col-down-payment').html(result.data.downPaymentFormatted);
                            $('#col-received').html(result.data.receivedAmountFormatted);
                            $('#col-last-received').html(result.data.lastReceivedFormatted);
                            $('#col-remaining').html(result.data.remainingAmountFormatted);
                            $('#col-payable').html(result.data.remainingAmountFormatted);
                            $('#payable').val(result.data.remainingAmount);
                            $('#amount').attr('max', result.data.remainingAmount);
                            $('#details-btn').attr('href', result.data.salesDetailLink);
                            $('#details-row').fadeIn('slow');
                            $('.amount-row').fadeIn('slow');
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
    </script>
@endsection
