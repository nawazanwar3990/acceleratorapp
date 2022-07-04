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
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Search Result For
                                            "{{ \App\Enum\LeftNavBar\CoWorkingSpaceNavEnum::getTranslationKeyBy(\App\Enum\KeyWordEnum::FLAT) }}
                                            "</h4>
                                        <h6 class="card-subtitle">About {{ count($flats) }} result ( 0.10
                                            seconds)</h6>
                                        @foreach($flats as $flat)
                                            <div class="d-flex flex-row comment-row">
                                                <div class="pt-4">
                                                    <div class="carousel slide" data-bs-ride="carousel">
                                                        <div class="carousel-inner">
                                                            @if(count($flat->images)>0)
                                                                @foreach($flat->images as $image)
                                                                    <div
                                                                        class="carousel-item flex-column carousel-item-next carousel-item-start">
                                                                        <img
                                                                            onerror="this.src='{{ asset('images/default_building.webp') }}'"
                                                                            src="{{ asset($image->filename) }}"
                                                                            class="img img-circle" width="80" height="80"
                                                                            alt="{{ $flat->name }}">
                                                                    </div>
                                                                @endforeach
                                                            @else
                                                                <div
                                                                    class="carousel-item flex-column carousel-item-next carousel-item-start">
                                                                    <img
                                                                        src="{{ asset('images/default_building.webp') }}"
                                                                        class="img img-circle" width="80" height="80"
                                                                        alt="{{ $flat->name }}">
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-text w-100 align-self-center">
                                                    <h3><a href="javacript:void(0)">{{ $flat->name }}</a></h3>
                                                    <div class="comment-footer">
                                                        <span class="date">{{ $flat->created_at }}</span>
                                                        <span class="label label-info">Pending</span>
                                                    </div>
                                                    <table class="table stylish-table table-sm m-b-5 m-t-10">
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
                                                               <td>{{ $flat->number }}</td>
                                                               <td>{{ $flat->area }} {{ trans('general.sqft') }}</td>
                                                               <td>{{ $flat->number }}</td>
                                                               <td>{{ $flat->accommodation }}</td>
                                                               <td>
                                                                   <a class="btn btn-xs btn-info"
                                                                      href="{{ route('website.pricing-payments.index',[\App\Enum\KeyWordEnum::FLAT,$flat->id]) }}">
                                                                       {{ trans('general.book_now') }}
                                                                       <i class="bx bx-plus-circle"></i>
                                                                   </a>
                                                               </td>
                                                           </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <ul class="nav nav-tabs" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active"
                                                                       data-bs-toggle="tab"
                                                                       href="#general_service_{{ $flat->id }}"
                                                                       role="tab"
                                                                       aria-selected="true">
                                                                        <span>{{ trans('general.general_services') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link"
                                                                       data-bs-toggle="tab"
                                                                       href="#security_service_{{ $flat->id }}"
                                                                       role="tab"
                                                                       aria-selected="false">
                                                                        <span>{{ trans('general.security_services') }}</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content tabcontent-border">
                                                                <div class="tab-pane active p-20"
                                                                     id="general_service_{{ $flat->id }}"
                                                                     role="tabpanel">
                                                                    @if(count($flat->all_general_services)>0)
                                                                        @foreach($flat->all_general_services as $service)
                                                                            <a class="btn btn-xs btn-info">{{ $service->name }}</a>
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                                <div class="tab-pane p-20"
                                                                     id="security_service_{{ $flat->id }}"
                                                                     role="tabpanel">
                                                                    @if(count($flat->all_security_services)>0)
                                                                        @foreach($flat->all_security_services as $service)
                                                                            <a class="btn btn-xs btn-info">{{ $service->name }}</a>
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="color: pink;">
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
@endsection
@section('inner-script-files')
@endsection
@section('innerScript')
@endsection
