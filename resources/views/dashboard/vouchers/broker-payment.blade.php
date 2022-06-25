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
                    {!! Form::open(['url' => route('dashboard.voucher.save-broker-payment'), 'method' => 'POST','files' => true, 'id' => 'voucher_form', 'class' => 'solid-validation']) !!}
                    <x-created-by-field />

                    @include('dashboard.vouchers.components.broker-payment-fields')
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
        });

        function getBrokerPaymentDetails() {
            let brokerID = $('#broker_id').val();
            if (brokerID > 0) {
                showWait();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.broker-details') }}",
                    data: {'brokerID': brokerID},
                    success: function (result) {
                        console.log(result);
                        hideWait();
                        if (result.success == true) {
                            $('#col-total').html(result.data.totalPayableFormatted);
                            $('#col-paid').html(result.data.totalPaidFormatted);
                            $('#col-last').html(result.data.lastPaidFormatted);
                            $('#col-remaining').html(result.data.remainingFormatted);
                            $('#amount').attr('max', result.data.remaining);
                            $('.amount-row').fadeIn('slow');
                            $('#details-row').fadeIn('slow');
                        }
                    }
                });
            }
        }
    </script>
@endsection
