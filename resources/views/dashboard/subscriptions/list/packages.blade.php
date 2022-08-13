@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.ba.index','is_create'=>false])
                <div class="card-body">
                    <table class="table custom-datatable table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th scope="col">{{ __('general.subscribed_by') }}</th>
                            <th scope="col">{{__('general.package')}}</th>
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
                                    @if($subscription->status==\App\Enum\SubscriptionStatusEnum::APPROVED)
                                        {{ $subscription->expire_date }}
                                    @else
                                        {{ $subscription->package->duration_limit }}
                                        @if($subscription->package->duration_type->slug===\App\Enum\DurationEnum::Daily)
                                            Days
                                        @elseif($subscription->package->duration_type->slug===\App\Enum\DurationEnum::MONTHLY)
                                            Months
                                        @elseif($subscription->package->duration_type->slug===\App\Enum\DurationEnum::WEEKLY)
                                            Weeks
                                        @elseif($subscription->package->duration_type->slug===\App\Enum\DurationEnum::YEARLY)
                                            Years
                                        @endif After Approved
                                    @endif
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
                                <td class="text-center">
                                    @if(\App\Services\GeneralService::isExpireSubscription(\Carbon\Carbon::now(),$subscription->expire_date))
                                        <a class="btn btn-xs btn-warning mx-1"
                                           onclick="apply_package_action('{{ $subscription->id }}','Renew')">
                                            {{ trans('general.renew') }} <i class="bx bx-plus-circle"></i>
                                        </a>
                                    @else
                                        @if($subscription->status==\App\Enum\SubscriptionStatusEnum::PENDING)
                                            <a class="btn btn-xs btn-warning mx-1"
                                               href="{{ route('dashboard.payment-receipts.index',['type'=>$subscription->subscribed->roles[0]->slug,'id'=>$subscription->id]) }}">
                                                {{ trans('general.view_receipt') }} <i
                                                    class="bx bx-plus-circle"></i>
                                            </a>
                                        @else
                                            <a class="btn btn-xs btn-warning mx-1"
                                               href="{{ route('dashboard.payments.index',['id'=>$subscription->id]) }}">
                                                {{ trans('general.payment_logs') }}
                                            </a>
                                        @endif
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
