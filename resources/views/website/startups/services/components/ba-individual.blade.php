@if(is_object($startup_services))
    @if(count($startup_services)>0)
        @foreach($startup_services as $service)
            <div class="column is-one-quarter flex-portrait-4">
                <div class="flex-card is-feature padding-20">
                    <div class="icon-container is-first is-icon-reveal">
                        <img src="{{ asset('assets/img/graphics/icons/time-teal.svg') }}"
                             data-base-url="{{ asset('assets/img/graphics/icons/time-teal.svg') }}"
                             data-extension=".svg" alt="">
                    </div>
                    <div class="content-container has-text-centered pb-4">
                        <h3>{{ $service->name }}</h3>
                        <p></p>
                    </div>
                    <div class="py-1 text-center">
                        @if($service->slug =='incubator')
                            <a href="{{route('website.buildings.index',$startup_id)}}" class="button  primary-btn btn-sm rounded raised">{{trans('general.building')}} ({{ \App\Services\BuildingService::available_count_startup_buildings($startup_id) }})</a>
                            <a href="{{route('website.floors.index',$startup_id)}}" class="button  primary-btn btn-sm rounded raised">{{trans('general.floor')}} ({{ \App\Services\FloorService::available_count_startup_floors($startup_id) }})</a>
                            <a href="{{route('website.offices.index',$startup_id)}}" class="button  primary-btn btn-sm rounded raised">{{trans('general.office')}} ({{ \App\Services\OfficeService::available_count_startup_offices($startup_id) }}</a>
                        @else
                            <a href="" class="button  primary-btn btn-sm rounded raised">View</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endif
