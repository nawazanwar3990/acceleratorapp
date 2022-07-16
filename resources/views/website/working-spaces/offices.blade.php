@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="row" style="position: relative;">
        @include('website.components.home.banner')
        @include('website.components.home.what-you-are')
        <div class="col-md-12 p-0">
            <div class="fix-width">
                <div class="row location pb-5">
                    <div class="col-lg-3 col-md-4">
                        @include('website.working-spaces.search.office')
                    </div>
                    <div class="col-lg-9 col-md-8 bg-light border-start">
                        <div class="row">
                            <div class="col-12">
                                @foreach($offices as $office)
                                    <div class="card overflow-hidden">

                                        <div class="row no-gutters">
                                            <div class="col-md-4"
                                                 style="background: url('http://eliteadmin.themedesigner.in/demos/bt4/assets/images/property/prop1.jpeg') center center / cover no-repeat; min-height:250px;">
                                                @if(\App\Services\OfficeService::already_subscribed($office->id))
                                                    <span class="pull-right label label-danger">
                                                        {{__('general.sold')}}
                                                    </span>
                                                @else
                                                    <span class="pull-right label label-success">
                                                        {{__('general.for_rent')}}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4 border-end border-bottom">
                                                        <div class="p-20">
                                                            <h5 class="card-title">{{ ucwords(str_replace('_',' ',$office->name)) }}</h5>
                                                            <h5 class="text-danger">{{ $office->number }}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 border-bottom py-2">
                                                        <h4 class="text-center fw-bold">{{__('general.available_plans')}}</h4>
                                                        <div class="row">
                                                            @if(count($office->plans)>0)
                                                                @foreach($office->plans as $plan)
                                                                    <div class="col-12">
                                                                        <h5 class="text-center fw-bold text-center">
                                                                            {{ ucwords(str_replace('_',' ',$plan->name)) }}
                                                                        </h5>
                                                                    </div>
                                                                    <div
                                                                        class="col-md-6 col-xl-6 col-xxl-6 col-6 align-self-center">
                                                                        <h6 class="text-center fw-bold">{{__('general.basic_service')}}</h6>
                                                                        @if(count($plan->basic_services))
                                                                            <ul class="list-group list-group-flush bg-transparent text-center">
                                                                                @foreach($plan->basic_services as $service)
                                                                                    <li class="list-group-item py-0 border-0  bg-transparent px-0 text-sm-start">
                                                                                        <i class="bx bx-check text-success"></i> {{ $service->name }}
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                    </div>
                                                                    <div
                                                                        class="col-md-6 col-xl-6 col-xxl-6 col-6 align-self-center">
                                                                        <h6 class="text-center fw-bold">{{__('general.additional_service')}}</h6>
                                                                        @if(count($plan->additional_services))
                                                                            <ul class="list-group list-group-flush bg-transparent text-center">
                                                                                @foreach($plan->additional_services as $service)
                                                                                    <li class="list-group-item py-0 border-0  bg-transparent px-0 text-sm-start">
                                                                                        <i class="bx bx-check text-success"></i> {{ $service->name }}
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- column -->
                                                    <div class="col-md-12">
                                                        @if(count($office->owners)>0)
                                                            @foreach($office->owners as $owner)
                                                                <div class="p-20">
                                                                    <div class="d-flex no-block align-items-center">
                                                                        <a href="javascript:void(0)">
                                                                            @isset($owner->first_image)
                                                                                <img alt="img"
                                                                                     class="thumb-md img-circle m-r-10"
                                                                                     src="{{ asset($owner->first_image->filemane) }}">
                                                                            @else
                                                                                <img alt="img"
                                                                                     class="thumb-md img-circle m-r-10"
                                                                                     src="{{ asset('images/users/1.jpg') }}">
                                                                            @endif
                                                                        </a>
                                                                        <div>
                                                                            <h5 class="card-title m-b-0">Ali</h5>
                                                                            <h6 class="text-muted">
                                                                                5 {{__('general.offices')}}</h6>
                                                                        </div>
                                                                        <div class="ms-auto text-muted text-end">
                                                                            <i class="fa fa-map-marker text-danger m-r-10"></i>
                                                                            Faislabad
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <!-- column -->
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
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection
