<x-page-layout
    :page="$page">
    <x-slot name="content">
        <div class="section">
            <div class="container">
                <div class="shop-toolbar">
                    <h4>{{ trans('general.buildings') }}</h4>
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
                        @forelse($buildings as $building)
                            <div class="column is-one-third-tablet is-one-quarter-desktop is-one-fifth-fullhd">
                                <div class="grid-product">
                                    <div class="grid-product-info">
                                        <span>{{ $building->name }}</span>
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
                                             alt="{{ $building->name }}">
                                    </div>
                                    <p class="border-bottom pb-1 mb-2">
                                        <strong>{{ trans('general.building_type') }}</strong>
                                        <span class="pull-right">
                                         @if($building->building_type)
                                                {{ \App\Services\BuildingService::buildingTypesForDropdown($building->building_type)  }}
                                            @else
                                                --
                                            @endif
                                    </span>
                                    </p>
                                    <p class="border-bottom pb-1 mb-2">
                                        <strong>{{ trans('general.entry_gates') }}</strong>
                                        <span class="pull-right">
                                         @if($building->entry_gates)
                                                {{ \App\Services\BuildingService::buildingEntryGatesForDropdown($building->entry_gates)  }}
                                            @else
                                                --
                                            @endif
                                    </span>
                                    </p>
                                    <p class="border-bottom pb-1 mb-2">
                                        <strong>{{ trans('general.area') }}</strong>
                                        <span class="pull-right">
                                        {{ $building->area }} Sqft
                                    </span>
                                    </p>
                                    <p class="border-bottom pb-1">
                                        <strong>{{ trans('general.facing') }}</strong>
                                        <span class="pull-right">
                                     @if($building->facing)
                                                {{ \App\Services\BuildingService::buildingFacingsForDropdown($building->facing)  }}
                                            @else
                                                --
                                            @endif
                                    </span>
                                    </p>
                                    @if($building->getOwnerId())
                                        <p class="border-bottom pb-1">
                                            <strong>{{ trans('general.owner') }}</strong>
                                            <span class="pull-right">{{ $building->getOwnerName() }}</span>
                                        </p>
                                    @endif
                                    <div class="buttons text-center justify-content-center">
                                        <a href="{{ route('website.floors.index',[$startup_id,$building->id]) }}" class="button is-half">{{ trans('general.floors') }}
                                            ({{ count($building->floors) }})</a>
                                        <a href="{{ route('website.offices.index',[$startup_id,$building->id]) }}" class="button is-half">{{ trans('general.offices') }}
                                            ({{ count($building->offices) }})</a>
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
