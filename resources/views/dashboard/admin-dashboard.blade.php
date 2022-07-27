@extends('layouts.dashboard')
@section('css-before')
@endsection
@section('css-after')
    <style>
        .card {
            border-top: none !important;
        }
    </style>
@endsection
@section('content')
   <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row m-t-40">
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white">{{ \App\Services\GeneralService::count_ba_services() }}</h1>
                                    <h6 class="text-white">Business Accelerator Services</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-primary text-center">
                                    <h1 class="font-light text-white">{{\App\Services\GeneralService::count_ba_packages()}}</h1>
                                    <h6 class="text-white">Packages</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white">{{\App\Services\GeneralService::count_ba_receipts()}}</h1>
                                    <h6 class="text-white">Payment Receipts</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-dark text-center">
                                    <h1 class="font-light text-white">{{\App\Services\GeneralService::count_ba_subscriptions()}}</h1>
                                    <h6 class="text-white">Subscriptions</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white">{{\App\Services\GeneralService::count_ba_accelerator()}}</h1>
                                    <h6 class="text-white">Business Accelerator</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-transparent border-bottom">
                    <div class="card-title">
                        <h4 class="card-title mb-0">Current Dealing</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th scope="col">Business Accelerator</th>
                                <th scope="col">Package</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Expire Date</th>
                                <th scope="col">Renewal Date</th>
                            </tr>
                            </thead>
                            @forelse($subscriptions as $subscription)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @isset($subscription->subscribed)
                                            {{ $subscription->subscribed->getFullName()  }}
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
                                </tr>
                            @empty
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('inner-script-files')

@endsection

@section('innerScript')
    <script>

    </script>
@endsection
