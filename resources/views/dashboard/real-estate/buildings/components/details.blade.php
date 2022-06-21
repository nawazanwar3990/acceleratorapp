<div class="">
{{--    <h2 class="accordion-header" id="headingOne">--}}
{{--        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--            --}}
{{--        </button>--}}
{{--    </h2>--}}

    <h4 class="card-title text-purple">{{ __('general.building_details') }}</h4>
    <hr>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('length' ,__('general.length_ft').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::number('length',null,['id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'required', 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();']) !!}
                @error('length')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('width' ,__('general.width_ft').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::number('width',null,['id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'required', 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();']) !!}
                @error('width')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('area' ,__('general.saleable_area_sft').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::text('area',null,['id'=>'area','class'=>'form-control ','placeholder'=>__('general.area'), 'required', 'readonly', 'tabindex'=>'-1']) !!}
                @error('area')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('building_corners' ,__('general.building_corners').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('building_corners', \App\Services\RealEstate\BuildingService::buildingCornersForDropdown(),null,['id'=>'building_corners',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_building_corners'),'style'=>'width:100%;', 'required'])
                !!}
                @error('building_corners')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('building_type' ,__('general.building_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('building_type', \App\Services\RealEstate\BuildingService::buildingTypesForDropdown(),null,['id'=>'building_type',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_building_type'),'style'=>'width:100%;', 'required'])
                !!}
                @error('building_type')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('property_type' ,__('general.property_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('property_type', \App\Services\RealEstate\BuildingService::buildingPropertyTypesForDropdown(),null,['id'=>'property_type',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_property_type'),'style'=>'width:100%;', 'required'])
                !!}
                @error('property_type')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('entry_gates' ,__('general.entry_gates').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('entry_gates', \App\Services\RealEstate\BuildingService::buildingEntryGatesForDropdown(),null,['id'=>'entry_gates',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_entry_gates'),'style'=>'width:100%;', 'required'])
                !!}
                @error('entry_gates')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('no_of_floors' ,__('general.no_of_floors').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('no_of_floors', \App\Services\RealEstate\BuildingService::buildingNoOfFloorsForDropdown(),null,['id'=>'no_of_floors',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_no_of_floors'),'style'=>'width:100%;', 'required'])
                !!}
                @error('no_of_floors')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('facing' ,__('general.facing').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('facing', \App\Services\RealEstate\BuildingService::buildingFacingsForDropdown(),null,['id'=>'facing',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_facing'),'style'=>'width:100%;', 'required'])
                !!}
                @error('facing')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('general_services' ,__('general.general_services').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('general_services[]', \App\Services\RealEstate\ServiceData::getGeneralServicesForDropdown(),null,['id'=>'general_services',
                    'multiple' => true, 'class'=>'select2 form-control','style'=>'width:100%;', 'required'])
                !!}
                @error('general_services')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!!  Html::decode(Form::label('security_services' ,__('general.security_services') ,['class'=>'form-label']))   !!}
                {!!  Form::select('security_services[]', \App\Services\RealEstate\ServiceData::getSecurityServicesForDropdown(),null,['id'=>'security_services',
                    'multiple' => true, 'class'=>'select2 form-control','style'=>'width:100%;'])
                !!}
                @error('security_services')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-1">
            {!!  Html::decode(Form::label('status' ,__('general.active').'<i class="text-danger">*</i>' ,['class'=>'form-check-label']))   !!}
        </div>
        <div class="col-md-5">
            <div class="form-check form-switch">
                {!! Form::checkbox('status', true, isset($for) ? $model->status : true,['class'=>'form-check-input']) !!}
            </div>
        </div>
    </div>
</div>


