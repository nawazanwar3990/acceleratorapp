<x-page-layout
    :page="$page">
    <x-slot name="content">
        <div class="section">
            <div class="container">
                <div class="shop-toolbar">
                    <h4>{{ trans('general.floors') }}</h4>
                    <div class="line"></div>
                    <div class="links">
                        <a class="link">
                            <span>View All</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="grid-products pb-6">
                    <div class="columns is-multiline grid-products-inner">
                        @forelse($floors as $floor)
                            <div class="column is-one-third-tablet is-one-quarter-desktop is-one-fifth-fullhd">
                                <div class="grid-product">
                                    <div class="grid-product-info">
                                        <span>{{ $floor->name }}</span>
                                    </div>
                                    <div class="grid-product-rating">
                                        <i class="fas fa-star highlighted"></i>
                                        <i class="fas fa-star highlighted"></i>
                                        <i class="fas fa-star highlighted"></i>
                                        <i class="fas fa-star highlighted"></i>
                                        <i class="fas fa-star highlighted"></i>
                                    </div>
                                    <div class="grid-product-image">
                                        <img src="{{ asset('images/icon/company.png') }}"
                                             data-demo-src="{{ asset('images/icon/company.png') }}"
                                             alt="{{ $floor->name }}">
                                    </div>
                                    @if($floor->building)
                                        <p class="border-bottom pb-1 mb-2">
                                            <strong>{{ trans('general.building') }}</strong>
                                            <a href="{{ route('website.buildings.index',[$startup_id,'s'=>$floor->building->id]) }}"
                                               class="pull-right">
                                                {{ $floor->building->name }}
                                            </a>
                                        </p>
                                    @endif
                                    <p class="border-bottom pb-1">
                                        <strong>{{ trans('general.floor_type') }}</strong>
                                        <span class="pull-right">
                                           @if($floor->type_id)
                                                {{ \App\Services\BuildingService::buildingTypesForDropdown($floor->type_id)  }}
                                            @else
                                                --
                                            @endif
                                    </span>
                                    </p>
                                    <div class="buttons text-center justify-content-center">
                                        <a href="{{ route('website.offices.index',[$startup_id,$floor->building->id??null,$floor->id]) }}"
                                           class="button is-fullwidth">{{ trans('general.offices') }}
                                            ({{ count($floor->offices) }})</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-page-layout>
