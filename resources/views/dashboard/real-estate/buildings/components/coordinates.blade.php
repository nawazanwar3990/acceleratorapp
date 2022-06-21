<a data-bs-toggle="collapse" href="#collapseCoordinates" aria-expanded="false" aria-controls="collapseCoordinates">
    <h4 class="card-title text-purple">{{ __('general.building_coordinates') }}</h4>
</a>
{{--<div class="">--}}
    {{--    <h2 class="accordion-header" id="headingTwo">--}}
    {{--        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">--}}
    {{--            {{ __('general.building_coordinates') }}--}}
    {{--        </button>--}}
    {{--    </h2>--}}
    <hr>
<div class="collapse" id="collapseCoordinates">
    <h5 class="card-title">{{ __('general.parameters') }}</h5>
    @include('dashboard.real-estate.buildings.components.coordinates-d-row')
    @include('dashboard.real-estate.buildings.components.coordinates-street-row')
    <h5 class="card-title">{{ __('general.coordinates') }}</h5>
    @include('dashboard.real-estate.buildings.components.coordinates-x-row')
    @include('dashboard.real-estate.buildings.components.coordinates-y-row')
</div>
{{--</div>--}}

