@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::SUPER_ADMIN))
                    @include('dashboard.components.general.form-list-header',['url'=>'dashboard.ba.index','is_create'=>true])
                @else
                    @include('dashboard.components.general.form-list-header',['url'=>'dashboard.customers.index','is_create'=>true])
                @endif
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\SubscriptionManagement\SubscriptionTableHeading::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.subscription-management.subscriptions.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>
        function renew_package(subscription_id, package_id, subscribed_id) {
            Swal.fire({
                title: 'Renewal Package',
                html: `{!!  Html::decode(Form::label('payment_type' ,__('general.payment_type').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::select('payment_type',\App\Enum\PaymentTypeEnum::getTranslationKeys(),\App\Enum\PaymentTypeEnum::OFFLINE,['class'=>'form-control','id'=>'payment_type','placeholder'=>'Select Payment Type']) }}`,
                confirmButtonText: 'Submit',
                focusConfirm: false,
                preConfirm: () => {
                    const payment_type = Swal.getPopup().querySelector('#payment_type').value
                    if (!payment_type) {
                        Swal.showValidationMessage(`First Choose Payment Type`)
                    }
                    return {payment_type: payment_type}
                }
            }).then((result) => {
                let payment_type = result.value.payment_type;
                if (payment_type === '{{ \App\Enum\PaymentTypeEnum::OFFLINE }}') {
                    Swal.fire({
                        title: 'Manage Payment',
                        html: `{!!  Html::decode(Form::label('transaction_id' ,__('general.transaction_id').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::text('transaction_id',null,['class'=>'form-control','id'=>'transaction_id']) }}`,
                        confirmButtonText: 'Submit',
                        focusConfirm: false,
                        preConfirm: () => {
                            const transaction_id = Swal.getPopup().querySelector('#transaction_id').value
                            if (!transaction_id) {
                                Swal.showValidationMessage(`First Enter Transaction ID`)
                            }
                            return {transaction_id: transaction_id}
                        }
                    }).then((result) => {
                        Swal.fire({
                            html: '{!! __('general.request_wait') !!}',
                            allowOutsideClick: () => !Swal.isLoading()
                        });
                        Swal.showLoading();
                        let data = {
                            'subscription_id': subscription_id,
                            'payment_type': payment_type,
                            'transaction_id': result.value.transaction_id,
                            'package_id': package_id,
                            'subscribed_id': subscribed_id
                        }
                        $.ajax({
                            url: "{{ route('dashboard.payments.store') }}",
                            method: 'POST',
                            data: data,
                            success: function (response) {
                                if (response.status === true) {
                                    location.reload();
                                }
                            },
                            error: function (response) {
                            }
                        });
                        console.log(data);
                    });
                } else {
                    Swal.fire(
                        'Pending!',
                        'This will be don later!',
                        'pending'
                    )
                }
            });
        }
    </script>
@endsection
