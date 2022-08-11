@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ __('general.subscription') }}</h5>
                </div>
                <div class="card-body">
                    <table class="table custom-datatable table-bordered">
                        <thead>
                        <tr>

                            <th scope="col">{{__('general.package')}}</th>
                            <th scope="col">{{__('general.price')}}</th>
                            <th scope="col">{{__('general.expire_date')}}</th>
                        </tr>
                        </thead>
                        @if(count($customer->subscriptions))
                            @foreach($customer->subscriptions as $subscription)
                                <tr>
                                    <td>
                                        {{ $subscription->package->name??null}}
                                    </td>
                                    <td>
                                        {{ $subscription->price }} {{ \App\Services\GeneralService::get_default_currency() }}
                                    </td>
                                    <td>
                                        {{ $subscription->expire_date }}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
