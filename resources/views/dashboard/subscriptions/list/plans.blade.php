@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',
                        [
                            'url'=>'website.customers.create',
                            'extra'=>[\App\Enum\StepEnum::USER_INFO],
                            'is_create'=>false
                        ])
                <div class="card-body">
                    <table class="table custom-datatable table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th scope="col">{{ __('general.subscribed_by') }}</th>
                            <th scope="col">Subscription For</th>
                            <th scope="col">{{__('general.plan')}}</th>
                            <th scope="col">{{__('general.price')}}</th>
                            <th scope="col">{{__('general.status')}}</th>
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
                                        {{ $subscription->subscribed->getFullName()  }}
                                    @else
                                        --
                                    @endisset
                                    <br>
                                    @isset($subscription->subscribed)
                                        <small
                                            class="text-muted">Role: {{ $subscription->subscribed->roles[0]->name  }} </small>
                                    @else
                                        --
                                    @endisset
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-primary" href="{{ route('dashboard.offices.show',[$subscription->model_id]) }}">
                                        {{ trans('general.office') }}
                                    </a>
                                </td>
                                <td>
                                    {{ $subscription->package->name??null}}
                                </td>
                                <td>
                                    {{ $subscription->price }} {{ \App\Services\GeneralService::get_default_currency() }}
                                </td>
                                <td>
                                    {{ \App\Enum\SubscriptionStatusEnum::getTranslationKeyBy($subscription->status) }}
                                </td>
                                <td>
                                    @if(in_array($subscription->status,[\App\Enum\SubscriptionStatusEnum::APPROVED,\App\Enum\SubscriptionStatusEnum::RENEW]))
                                        {{ $subscription->expire_date }}
                                    @else
                                        {{ $subscription->plan->duration }} @if($subscription->plan->duration>1)
                                            {{ trans('general.months_after_approved') }}
                                        @else
                                            {{ trans('general.month_after_approved') }}
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    @if($subscription->status == \App\Enum\SubscriptionStatusEnum::RENEW)
                                        {{ $subscription->renewal_date }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($subscription->status==\App\Enum\SubscriptionStatusEnum::PENDING)
                                        <a class="btn btn-xs btn-warning mx-1"
                                           href="{{ route('dashboard.payment-receipts.index',['type'=>\App\Enum\SubscriptionTypeEnum::OFFICE,'subscription_id'=>$subscription->subscription_id]) }}">
                                            {{ trans('general.view_receipt') }}
                                        </a>
                                    @else
                                        <a class="btn btn-xs btn-warning mx-1"
                                           href="{{route('dashboard.payment-logs.index',$subscription->id)}}">
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

@endsection
