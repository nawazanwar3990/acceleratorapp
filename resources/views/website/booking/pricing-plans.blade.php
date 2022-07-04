@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="row" style="position: relative;">
        @include('website.components.home.banner')
        @include('website.components.home.what-you-are')
        <div class="col-md-12">
            <div class="fix-width">
                <div class="row location pb-5">
                    <div class="col-lg-3 col-md-4">
                        @include('website.working-spaces.left-panel',['for'=>trans('general.bookings')])
                    </div>
                    <div class="col-lg-9 col-md-8 bg-light border-start">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        {{ $pageTitle }}
                                    </div>
                                    <div class="card-body">
                                        <div class="row pricing-plan justify-content-center">
                                            @foreach($plans as $plan)
                                                <div class="col-md-4 col-xs-4 col-sm-4 no-padding">
                                                    <div class="pricing-box">
                                                        <div class="pricing-body b-l">
                                                            <div class="pricing-header">
                                                                <h4 class="text-center">{{ $plan->name }}</h4>
                                                                <h3 class="text-center fw-bold">
                                                                    <span class="price-sign"></span>
                                                                    Installments : {{ $plan->months }}
                                                                </h3>
                                                                <p class="uppercase">
                                                                    <span class="fw-bold">{{ trans('general.duration') }}
                                                                        : </span> {{ \App\Services\GeneralService::getInstallmentDurationForDropdown($plan->installment_duration) }}
                                                                </p>
                                                            </div>
                                                            <div class="price-table-content">
                                                                <div class="price-row"><i
                                                                        class="icon-user"></i> {{ $plan->reminder_days }}
                                                                    {{ trans('general.days_reminder_notice') }}
                                                                </div>
                                                                <div class="price-row"><i
                                                                        class="icon-screen-smartphone"></i>
                                                                    {{ $plan->down_payment_value }} {{ \App\Services\GeneralService::getDiscountTypesForDropdown($plan->down_payment_type) }}
                                                                </div>
                                                                <div class="price-row"><i class="icon-refresh"></i>
                                                                    Monthly Backups
                                                                </div>
                                                                <div class="price-row">
                                                                    <a href="{{ route('website.bookings.index',[$type,$model->id,$plan->id]) }}"
                                                                       class="btn btn-success waves-effect waves-light m-t-20 text-white">
                                                                        {{ trans('general.book_now') }} <i
                                                                            class="bx bx-plus-circle"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection
