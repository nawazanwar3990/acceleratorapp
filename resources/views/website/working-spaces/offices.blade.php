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
                        @include('website.working-spaces.left-panel')
                        @include('website.search.flat')
                    </div>
                    <div class="col-lg-9 col-md-8 bg-light border-start">
                        <div class="row">
                            <div class="col-12">
                                @foreach($offices as $office)
                                    <div class="card overflow-hidden">
                                        <div class="row no-gutters">
                                            <div class="col-md-4 position-relative">
                                                <div class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @if(count($office->images)>0)
                                                            @foreach($office->images as $image)
                                                                <div
                                                                    class="carousel-item flex-column carousel-item-next carousel-item-start">
                                                                    <img
                                                                        onerror="this.src='{{ asset('images/default_building.webp') }}'"
                                                                        src="{{ asset($image->filename) }}"
                                                                        class="img w-100"
                                                                        alt="{{ $office->name }}">
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div
                                                                class="carousel-item flex-column carousel-item-next carousel-item-start">
                                                                <img
                                                                    src="{{ asset('images/default_building.webp') }}"
                                                                    class="img w-100"
                                                                    alt="{{ $office->name }}">
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <span class="pull-right label label-danger position-absolute"
                                                      style="top: 0;left: 8px;">{{ trans('general.for_rent') }}</span>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row no-gutters">
                                                    <!-- column -->
                                                    <div class="col-md-6 border-end border-bottom">
                                                        <div class="p-20">
                                                            <h4 class="card-title">{{ $flat->name }} in
                                                                ({{ $office->floor->name??'' }})
                                                                of {{ $office->building->name??'' }}</h4>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.price') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ $office->price }} {{ \App\Services\GeneralService::get_default_currency() }}</span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.accommodation') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ \App\Services\OfficeService::OfficeSittingCapacityForDropdown($flat->accommodation) }} Persons</span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.is_furnished') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">
                                                                    @if($office->furnished)
                                                                        ✔
                                                                    @else
                                                                        ✘
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.latitude') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ $office->latitude }}</span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.longitude') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ $office->longitude }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- column -->
                                                    <div class="col-md-6 border-bottom">
                                                        <div class="p-20">
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.area') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ $office->area }} {{ trans('general.sqft') }}</span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.flat_type') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ $office->type->name??'' }}</span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.facing') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ \App\Services\OfficeService::facingDropdown($flat->facing) }}</span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.view') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ \App\Services\OfficeService::getOfficeViewsForDropdown($flat->view) }}</span>
                                                            </div>
                                                            <div
                                                                class="d-flex no-block align-items-center justify-content-center mt-2 pt-3 border-top">
                                                                <a class="btn btn-xs btn-success"
                                                                   href="{{ route('website.pricing-plans.index',[\App\Enum\KeyWordEnum::OFFICE,$office->id]) }}">
                                                                    {{ trans('general.book_now') }} <i
                                                                        class="bx bx-plus-circle"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="p-20">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active"
                                                               data-bs-toggle="tab"
                                                               href="#general_service_{{ $office->id }}"
                                                               role="tab"
                                                               aria-selected="true">
                                                                <span>{{ trans('general.general_services') }}</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               data-bs-toggle="tab"
                                                               href="#security_service_{{ $office->id }}"
                                                               role="tab"
                                                               aria-selected="false">
                                                                <span>{{ trans('general.security_services') }}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content tabcontent-border">
                                                        <div class="tab-pane active p-20"
                                                             id="general_service_{{ $office->id }}"
                                                             role="tabpanel">
                                                            @if(count($office->all_general_services)>0)
                                                                @foreach($office->all_general_services as $service)
                                                                    <a class="btn btn-xs btn-info">{{ $service->name }}</a>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                        <div class="tab-pane p-20"
                                                             id="security_service_{{ $office->id }}"
                                                             role="tabpanel">
                                                            @if(count($office->all_security_services)>0)
                                                                @foreach($office->all_security_services as $service)
                                                                    <a class="btn btn-xs btn-info">{{ $service->name }}</a>
                                                                @endforeach
                                                            @endif
                                                        </div>
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
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection