@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header')
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Type</th>
                            <th scope="col">Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $d)
                            <tr>
                                <td>
                                    {{ $type }}
                                </td>
                                <td>{{ $d->name }}</td>
                                <td class="text-center">
                                    {!! Form::radio('subscription_id',$d->id,false) !!}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center p-5">
                                    <a href="{{ route('dashboard.offices.create') }}"
                                       class="btn btn-info">
                                        {{ trans('general.new_office') }} <i class="bx bx-plus-circle"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                @if(count($data)>0)
                    <div class="my-3 text-center">
                        <a class="btn btn-info" onclick="apply_subscription();">{{ trans('general.save') }}</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>

        function apply_subscription() {
            Swal.fire({
                title: 'Apply Subscription',
                html: `{!!  Html::decode(Form::label('payment_type' ,__('general.payment_type').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}{{ Form::select('payment_type',\App\Enum\PaymentTypeEnum::getTranslationKeys(),\App\Enum\PaymentTypeEnum::OFFLINE,['class'=>'form-control','id'=>'payment_type','placeholder'=>'Select Payment Type']) }}`,
                confirmButtonText: 'Next',
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
                            'payment_type': payment_type,
                            'transaction_id': result.value.transaction_id,
                            'subscription_id': $("input[name='subscription_id']:checked").val(),
                            'subscription_type': '{{ $type }}',
                            'subscribed_id': {{ request()->query('id') }}
                        }
                        $.ajax({
                            url: "{{ route('dashboard.subscriptions.store') }}",
                            method: 'POST',
                            data: data,
                            success: function (response) {
                                if (response.status === true) {
                                    location.assign(response.route);
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
