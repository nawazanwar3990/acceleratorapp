<div class="card">
    <div class="card-header border-0" style="background-color: transparent !important;">
        <div class="row">
            <div class="col-md-10">
                <h4 class="card-title"><i class="fas fa-filter text-purple"></i> {{ __('general.filters') }}</h4>
            </div>
            <div class="col-md-2">
                <div class="card-actions">
                    <a class="btn btn-primary btn-action d-inline-flex align-items-center justify-content-center" data-action="collapse"><i class="ti-plus"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body collapse">
        {!! Form::open(['url' => route('dashboard.filter.building'), 'method' => 'GET','files' => true]) !!}
        <div class="row mb-2">

            <div class="col-md-4">
                {!!  Html::decode(Form::label('building_id' ,__('general.building') ,['class'=>'form-label']))   !!}
                {!!  Form::select('building_id', \App\Services\RealEstate\BuildingService::getBuildingDropdown(), request()->has('building_id')?request()->get('building_id'):null,['id'=>'building_id',
                    'class'=>'select2 form-control', 'placeholder'=>'Select Building','style'=>'width:100%','onchange '=>'getFloorsOfBuilding(this)'])
                !!}
            </div>

            <div class="col-md-4">
                {!!  Html::decode(Form::label('floor_id' ,__('general.floor') ,['class'=>'form-label']))   !!}
                {!!  Form::select('floor_id', [], request()->has('floor_id')?request()->get('floor_id'):null,['id'=>'floor_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.floor'),'style'=>'width:100%','onchange '=>'getFlatsOfFloor(this)'])
                !!}
            </div>

            <div class="col-md-4">
                {!!  Html::decode(Form::label('flat_id' ,__('general.flats') ,['class'=>'form-label']))   !!}
                {!!  Form::select('flat_id', [], request()->has('flat_id')?request()->get('flat_id'):null,['id'=>'flat_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.flats'),'style'=>'width:100%'])
                !!}
            </div>

        </div>

        <div class="row my-3">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary w-md">{{ __('general.search') }} <i class="fa fa-search"></i></button>
                <a href="{{ route('dashboard.print.building') }}" class="btn btn-primary w-md">{{ __('general.clear') }} <i class="fa fa-times"></i></a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
