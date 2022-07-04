<a data-bs-toggle="collapse" href="#collapseCoordinates" aria-expanded="false" aria-controls="collapseCoordinates">
    <h4 class="card-title text-purple">{{ __('general.building_coordinates') }}</h4>
</a>
<hr>
<div class="collapse" id="collapseCoordinates">
    <h5 class="card-title">{{ __('general.parameters') }}</h5>
    @include('dashboard.working-spaces.buildings.components.coordinates-d-row')
    @include('dashboard.working-spaces.buildings.components.coordinates-street-row')
    <h5 class="card-title">{{ __('general.coordinates') }}</h5>
    @include('dashboard.working-spaces.buildings.components.coordinates-x-row')
    @include('dashboard.working-spaces.buildings.components.coordinates-y-row')
</div>

