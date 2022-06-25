{{--<div class="">--}}
    {{--    <h2 class="accordion-header" id="headingOne">--}}
    {{--        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"--}}
    {{--                aria-expanded="true" aria-controls="collapseOne">--}}
    {{--            {{ __('general.flats') }}--}}
    {{--        </button>--}}
    {{--    </h2>--}}

<div class="row">
    <div class="col-md-6">
        <h4 class="card-title text-purple">{{ __('general.flat_details') }}</h4>
    </div>
    <div class="col-md-6 text-right">
        <h4 class="card-title text-purple">
            {{ __('general.total_saleable_area') }}:&nbsp;<span id="totalArea" class="fw-bold">0.00</span>&nbsp;<small>{{ __('general.sft') }}</small>,&nbsp;
            {{ __('general.available_area') }}:&nbsp;<span id="availableArea" class="fw-bold">0.00</span>&nbsp;<small>{{ __('general.sft') }}</small>,&nbsp;
        </h4>
    </div>
</div>
    <hr class="mt-1">
    <div class="row mb-2">
        <div class="col">
            {!!  Html::decode(Form::label('floor_id' ,__('general.floor_name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}

            {!!  Form::select('floor_id', \App\Services\FloorService::getFloorsForDropdown(),null,['id'=>'floor_id',
                'class'=>'select2 form-control', 'placeholder'=>__('general.ph_floor_name'),'required','style'=>'width:100%',
                'onchange' => 'getFloorDetails();'])
            !!}
            @error('floor_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col">
            {!!  Html::decode(Form::label('flat_name' ,__('general.flat_name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
            {!!  Form::text('flat_name',null,['id'=>'flat_name','class'=>'form-control ','placeholder'=>__('general.flat_name'), 'required']) !!}
            @error('flat_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col">
            {!!  Html::decode(Form::label('flat_number' ,__('general.flat_number') ,['class'=>'col-form-label']))   !!}
            {!!  Form::number('flat_number',null,['id'=>'flat_number','class'=>'form-control ','placeholder'=>__('general.flat_number')]) !!}
            @error('flat_number')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col">
            {!!  Html::decode(Form::label('flat_type_id' ,__('general.flat_type').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
            {!!  Form::select('flat_type_id', \App\Services\FlatService::getFlatTypesForDropdown(),null,['id'=>'flat_type_id',
                'class'=>'select2 form-control form-select', 'placeholder'=>__('general.flat_type'),'style'=>'width:100%', 'required'])
            !!}
            @error('flat_type_id')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            {!!  Html::decode(Form::label('creation_date' ,__('general.creation_date') ,['class'=>'col-form-label']))   !!}

            <div class="input-group">
                {!!  Form::text('creation_date',isset($for) ? \App\Services\GeneralService::formatDate($model->creation_date): \App\Services\GeneralService::formatDate(\Carbon\Carbon::today()),['id'=>'creation_date','class'=>'form-control datepicker']) !!}
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
            </div>
            @error('creation_date')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col">
            {!!  Html::decode(Form::label('general_services' ,__('general.general_services'),['class'=>'col-form-label']))   !!}
            {!!  Form::select('general_services[]', \App\Services\ServiceData::getGeneralServicesForDropdown(),isset($for) ? $model->general_services : \App\Services\BuildingService::getBuildingServices(),['id'=>'general_services',
                'multiple' => true, 'class'=>'select2 form-control','style'=>'width:100%;'])
            !!}
            @error('general_services')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col">
            {!!  Html::decode(Form::label('security_services' ,__('general.security_services'),['class'=>'col-form-label']))   !!}
            {!!  Form::select('security_services[]', \App\Services\ServiceData::getSecurityServicesForDropdown(),isset($for) ? $model->security_services : \App\Services\BuildingService::getBuildingServices('security'),['id'=>'security_services',
                'multiple' => true, 'class'=>'select2 form-control','style'=>'width:100%;'])
            !!}
            @error('security_services')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <div class="row mb-2">

        <div class="col">
            {!!  Html::decode(Form::label('facing' ,__('general.facing'),['class'=>'col-form-label']))   !!}
            {!!  Form::select('facing', \App\Services\BuildingService::buildingFacingsForDropdown(),null,['id'=>'facing',
                'class'=>'select2 form-control', 'placeholder'=>__('general.ph_facing'),'style'=>'width:100%'])
            !!}
            @error('facing')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col">
            {!!  Html::decode(Form::label('view' ,__('general.view_location'),['class'=>'col-form-label']))   !!}
            {!!  Form::select('view', \App\Services\FlatService::getFlatViewsForDropdown(),null,['id'=>'view',
                'class'=>'select2 form-control', 'placeholder'=>__('general.ph_view_location'),'style'=>'width:100%'])
            !!}
            @error('view')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col">
            {!!  Html::decode(Form::label('accommodation' ,__('general.number_of_accommodation'),['class'=>'col-form-label']))   !!}
            {!!  Form::select('accommodation', \App\Services\FlatService::flatNoOfAccommodationForDropdown(),null,['id'=>'accommodation',
                'class'=>'select2 form-control', 'placeholder'=>__('general.ph_number_of_accommodation'),'style'=>'width:100%'])
            !!}
            @error('accommodation')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-2">
            {!!  Html::decode(Form::label('furnished' ,__('general.furnished') ,['class'=>'form-label']))   !!}
            <div class="form-check form-switch">
                {!! Form::checkbox('furnished', true, isset($for) ? $model->furnished : false,['class'=>'form-check-input']) !!}
            </div>
        </div>
        <div class="col-md-10" id="furnished_details"
             style="{{ isset($for) ? ($model->furnished == true ? '' : 'display:none;'): 'display: none;' }}">
            {!!  Html::decode(Form::label('furnished_details' ,__('general.details') ,['class'=>'col-form-label']))   !!}
            {!!  Form::text('furnished_details',null,['id'=>'furnished_details','class'=>'form-control ','placeholder'=>__('general.details')]) !!}
        </div>
    </div>
{{--</div>--}}

