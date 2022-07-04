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
                    </div>
                    <div class="col-lg-9 col-md-8 bg-light border-start">
                        <div class="row">
                            <div class="col-12">
                                @foreach($buildings as $building)
                                    <div class="card overflow-hidden">
                                        <div class="row no-gutters">
                                            <div class="col-md-4 position-relative">
                                                <div class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @if(count($building->images)>0)
                                                            @foreach($building->images as $image)
                                                                <div
                                                                    class="carousel-item flex-column carousel-item-next carousel-item-start">
                                                                    <img
                                                                        onerror="this.src='{{ asset('images/default_building.webp') }}'"
                                                                        src="{{ asset($image->filename) }}"
                                                                        class="img w-100"
                                                                        alt="{{ $building->name }}">
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div
                                                                class="carousel-item flex-column carousel-item-next carousel-item-start">
                                                                <img
                                                                    src="{{ asset('images/default_building.webp') }}"
                                                                    class="img w-100"
                                                                    alt="{{ $building->name }}">
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
                                                            <h5 class="card-title">{{ $building->name }}</h5>
                                                            <h5 class="text-danger">$ 220,000</h5>
                                                        </div>
                                                    </div>
                                                    <!-- column -->
                                                    <div class="col-md-6 border-bottom">
                                                        <div class="p-20">
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.area') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ $building->area }} {{ trans('general.sqft') }}</span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.entry_gates') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ $building->entry_gates }}</span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.no_of_floors') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ $building->no_of_floors }}</span>
                                                            </div>
                                                            <div class="d-flex no-block align-items-center">
                                                                <span
                                                                    class="p-10 text-muted">{{ trans('general.facing') }}</span>
                                                                <span
                                                                    class="badge rounded-pill bg-info ms-auto">{{ $building->facing }}</span>
                                                            </div>
                                                            <div
                                                                class="d-flex no-block align-items-center justify-content-center mt-2 pt-3 border-top">
                                                                <a class="btn btn-xs btn-info"
                                                                   href="{{ route('website.pricing-payments.index',[\App\Enum\KeyWordEnum::BUILDING,$building->id]) }}">
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
                                                               href="#general_service_{{ $building->id }}"
                                                               role="tab"
                                                               aria-selected="true">
                                                                <span>{{ trans('general.general_services') }}</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               data-bs-toggle="tab"
                                                               href="#security_service_{{ $building->id }}"
                                                               role="tab"
                                                               aria-selected="false">
                                                                <span>{{ trans('general.security_services') }}</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               data-bs-toggle="tab"
                                                               href="#floors_{{ $building->id }}"
                                                               role="tab"
                                                               aria-selected="false">
                                                                <span>{{ trans('general.floors') }}</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link"
                                                               data-bs-toggle="tab"
                                                               href="#flats_{{ $building->id }}"
                                                               role="tab"
                                                               aria-selected="false">
                                                                <span>{{ trans('general.flats') }}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content tabcontent-border">
                                                        <div class="tab-pane active p-20"
                                                             id="general_service_{{ $building->id }}"
                                                             role="tabpanel">
                                                            @if(count($building->all_general_services)>0)
                                                                @foreach($building->all_general_services as $service)
                                                                    <a class="btn btn-xs btn-info">{{ $service->name }}</a>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                        <div class="tab-pane p-20"
                                                             id="security_service_{{ $building->id }}"
                                                             role="tabpanel">
                                                            @if(count($building->all_security_services)>0)
                                                                @foreach($building->all_security_services as $service)
                                                                    <a class="btn btn-xs btn-info">{{ $service->name }}</a>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                        <div class="tab-pane p-20"
                                                             id="floors_{{ $building->id }}"
                                                             role="tabpanel">
                                                            @if(count($building->floors)>0)
                                                                @foreach($building->floors as $floor)
                                                                    <div class="card-header py-2">
                                                                        <h6 class="card-title mb-0">{{ $floor->name }}</h6>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <table
                                                                            class="table stylish-table table-sm m-b-5 m-t-10">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>{{ trans('general.number') }}</th>
                                                                                <th>{{ trans('general.area') }}</th>
                                                                                <th>{{ trans('general.available_flats') }}</th>
                                                                                <th>{{ trans('general.action') }}</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="carousel slide"
                                                                                         data-bs-ride="carousel">
                                                                                        <div
                                                                                            class="carousel-inner">
                                                                                            @if(count($floor->images)>0)
                                                                                                @foreach($floor->images as $image)
                                                                                                    <div
                                                                                                        class="carousel-item flex-column carousel-item-next carousel-item-start">
                                                                                                        <img
                                                                                                            onerror="this.src='{{ asset('images/default_building.webp') }}'"
                                                                                                            src="{{ asset($image->filename) }}"
                                                                                                            class="img img-circle"
                                                                                                            width="40"
                                                                                                            height="40"
                                                                                                            alt="{{ $image->name }}">
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            @else
                                                                                                <div
                                                                                                    class="carousel-item flex-column carousel-item-next carousel-item-start">
                                                                                                    <img
                                                                                                        src="{{ asset('images/default_building.webp') }}"
                                                                                                        class="img img-circle"
                                                                                                        width="40"
                                                                                                        height="40"
                                                                                                        alt="{{ $floor->name }}">
                                                                                                </div>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>{{ $floor->number }}</td>
                                                                                <td>{{ $floor->area }} {{ trans('general.sqft') }}</td>
                                                                                <td>{{ $floor->no_of_shops_flats }}</td>
                                                                                <td>
                                                                                    <a class="btn btn-xs btn-success"
                                                                                       href="{{ \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getWebsiteRoute(\App\Enum\KeyWordEnum::FLAT,['floorId'=>$floor->id]) }}">
                                                                                        {{ trans(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getTranslationKeyBy(\App\Enum\KeyWordEnum::FLAT)) }}
                                                                                        <i class="bx bx-shopping-bag"></i>
                                                                                    </a>
                                                                                    <a class="btn btn-xs btn-info"
                                                                                       href="{{ route('website.pricing-payments.index',[\App\Enum\KeyWordEnum::FLOOR,$floor->id]) }}">
                                                                                        {{ trans('general.book_now') }}
                                                                                        <i class="bx bx-plus-circle"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                        <div class="tab-pane p-20"
                                                             id="flats_{{ $building->id }}"
                                                             role="tabpanel">
                                                            @if(count($building->flats)>0)
                                                                @foreach($building->flats as $flat)
                                                                    <div class="card-header py-2">
                                                                        <h6 class="card-title mb-0">{{ $flat->name }}</h6>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <table
                                                                            class="table stylish-table table-sm m-b-5 m-t-10">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>{{ trans('general.number') }}</th>
                                                                                <th>{{ trans('general.area') }}</th>
                                                                                <th>{{ trans('general.accommodation') }}</th>
                                                                                <th>{{ trans('general.action') }}</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="carousel slide"
                                                                                         data-bs-ride="carousel">
                                                                                        <div
                                                                                            class="carousel-inner">
                                                                                            @if(count($flat->images)>0)
                                                                                                @foreach($flat->images as $image)
                                                                                                    <div
                                                                                                        class="carousel-item flex-column carousel-item-next carousel-item-start">
                                                                                                        <img
                                                                                                            onerror="this.src='{{ asset('images/default_building.webp') }}'"
                                                                                                            src="{{ asset($image->filename) }}"
                                                                                                            class="img img-circle"
                                                                                                            width="40"
                                                                                                            height="40"
                                                                                                            alt="{{ $flat->name }}">
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            @else
                                                                                                <div
                                                                                                    class="carousel-item flex-column carousel-item-next carousel-item-start">
                                                                                                    <img
                                                                                                        src="{{ asset('images/default_building.webp') }}"
                                                                                                        class="img img-circle"
                                                                                                        width="40"
                                                                                                        height="40"
                                                                                                        alt="{{ $flat->name }}">
                                                                                                </div>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>{{ $flat->number }}</td>
                                                                                <td>{{ $flat->area }} {{ trans('general.sqft') }}</td>
                                                                                <td>{{ $flat->number }}</td>
                                                                                <td>{{ $flat->accommodation }}</td>
                                                                                <td>
                                                                                    <a class="btn btn-xs btn-success"
                                                                                       href="{{ \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getWebsiteRoute(\App\Enum\KeyWordEnum::FLAT,['floorId'=>$floor->id]) }}">
                                                                                        {{ trans(\App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getTranslationKeyBy(\App\Enum\KeyWordEnum::FLAT)) }}
                                                                                        <i class="bx bx-shopping-bag"></i>
                                                                                    </a>
                                                                                    <a class="btn btn-xs btn-info"
                                                                                       href="{{ route('website.pricing-payments.index',[\App\Enum\KeyWordEnum::FLAT,$flat->id]) }}">
                                                                                        {{ trans('general.book_now') }}
                                                                                        <i class="bx bx-plus-circle"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
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
