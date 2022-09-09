@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',
                        [
                            'url'=>'website.customers.create',
                            'extra'=>[\App\Enum\StepEnum::USER_INFO],
                            'is_create'=>true
                        ])
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
                                        {{ $subscription->subscribed->getFullName() }}
                                    @else
                                        --
                                    @endisset
                                </td>
                                <td>
                                    <strong class="text-info">{{ $subscription->plan->name??null}}</strong> for <strong
                                        class="text-info">{{ $subscription->office->name??null }}</strong>
                                </td>
                                <td>
                                    {{ $subscription->price }} {{ \App\Services\GeneralService::get_default_currency() }}
                                </td>
                                <td>
                                    {{ $subscription->created_at }}
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
