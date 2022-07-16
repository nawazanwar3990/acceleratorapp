@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.customers.index','is_create'=>true])
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th scope="col">{{ __('general.customer') }}</th>
                            <th scope="col">{{__('general.plan')}}</th>
                            <th scope="col">{{__('general.price')}}</th>
                            <th scope="col">{{__('general.expire_date')}}</th>
                            <th scope="col">{{__('general.renewal_data')}}</th>
                            <th class="text-center">{{__('general.action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($subscriptions as $subscription)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @isset($subscription->subscribed)
                                        {{ $subscription->subscribed->getFullName() }}
                                    @else
                                        --
                                    @endisset
                                </td>
                                <td>
                                    <strong class="text-info">{{ $subscription->plan->name??null}}</strong> for <strong class="text-info">{{ $subscription->office->name??null }}</strong>
                                </td>
                                <td>
                                    {{ $subscription->price }} {{ \App\Services\GeneralService::get_default_currency() }}
                                </td>
                                <td>
                                    {{ $subscription->expire_date }}
                                </td>
                                <td>
                                    @php
                                        $is_renew = \Illuminate\Support\Facades\DB::table(\App\Enum\TableEnum::SUBSCRIPTION_LOGS)->where('subscription_id',$subscription->id)->count();
                                    @endphp
                                    @if($is_renew>1)
                                        {{ $subscription->renewal_date }}
                                    @else
                                        --
                                    @endif
                                </td>
                                <td class="text-center d-flex">
                                    @if(\App\Services\GeneralService::isExpireSubscription(\Carbon\Carbon::now(),$subscription->expire_date))
                                         <a class="btn btn-xs btn-warning mx-1"
                                            onclick="renew_package('{{ $subscription->id }}')">
                                             {{ trans('general.renew') }} <i class="bx bx-plus-circle"></i>
                                         </a>
                                    @else
                                        <a class="btn btn-xs btn-warning mx-1" href="{{ route('dashboard.payments.index',['id'=>$subscription->id]) }}">
                                            {{ trans('general.payment_logs') }}
                                        </a>
                                     @endif
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>
        function renew_package(subscription_id) {
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
                            'transaction_id': result.value.transaction_id
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
