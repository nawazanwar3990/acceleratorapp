<div class="mb-3 row">

    <div class="col mb-3">
        {!!  Html::decode(Form::label('building_id' ,__('general.building_name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::select('building_id', \App\Services\BuildingService::getBuildingDropdown(),null,['id'=>'building_id',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_building_name'),'required','style'=>'width:100%',
            'onchange' => 'getFloorDetails();'])
        !!}
        @error('floor_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.floor_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.floor_name'), 'required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col mb-3">
        {!!  Html::decode(Form::label('number' ,__('general.floor_number').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('number',null,['id'=>'number','class'=>'form-control ','placeholder'=>__('general.floor_number'), 'required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col mb-3">
        {!!  Html::decode(Form::label('floor_type_id' ,__('general.floor_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('floor_type_id', \App\Services\FloorService::getFloorTypesForDropdown(),null,['id'=>'floor_type_id',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_floor_type'),'required','style'=>'width:100%'])
        !!}
    </div>
</div>

<div class="mb-3 row">
    <div class="col mb-3">
        {!!  Html::decode(Form::label('height' ,__('general.height_ft').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::number('height',null,['min' => 1, 'step' => 'any', 'id'=>'height','class'=>'form-control ','placeholder'=>__('general.height'), 'required']) !!}
        @error('height')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col mb-3">
        {!!  Html::decode(Form::label('length' ,__('general.length_ft').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('length',null,['min' => 1, 'step' => 'any', 'id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();', 'required']) !!}
        @error('length')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col mb-3">
        {!!  Html::decode(Form::label('width' ,__('general.width_ft').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('width',null,['min' => 1, 'step' => 'any', 'id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();', 'required']) !!}
        @error('width')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col mb-3">
        {!!  Html::decode(Form::label('area_view' ,__('general.area_sft') ,['class'=>'form-label']))   !!}
        {!!  Form::number('area_view',isset($for) ? $model->area : null,['id'=>'area_view','class'=>'form-control ','placeholder'=>__('general.area'),'disabled', 'tabindex'=>'-1']) !!}
        {!!  Form::hidden('area',null,['id'=>'area']) !!}
        @error('area')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="mb-3 row">
    <div class="col mb-3">
        {!!  Html::decode(Form::label('no_of_shops_flats' ,__('general.shops_flats') ,['class'=>'form-label']))   !!}
        {!!  Form::text('no_of_shops_flats', 0,['id'=>'no_of_shops_flats', 'class'=>'form-control vertical-spin',])  !!}
        @error('no_of_shops_flats')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col mb-3">
        {!!  Html::decode(Form::label('general_services' ,__('general.general_services'),['class'=>'form-label']))   !!}
        {!!  Form::select('general_services[]', \App\Services\ServiceData::getGeneralServicesForDropdown(),isset($for) ? $model->general_services :null,['id'=>'general_services',
            'multiple' => true, 'class'=>'select2 form-control','style'=>'width:100%;'])
        !!}
        @error('general_services')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col mb-3">
        {!!  Html::decode(Form::label('security_services' ,__('general.security_services') ,['class'=>'form-label']))   !!}
        {!!  Form::select('security_services[]', \App\Services\ServiceData::getSecurityServicesForDropdown(),isset($for) ? $model->security_services :null,['id'=>'security_services',
            'multiple' => true, 'class'=>'select2 form-control','style'=>'width:100%;'])
        !!}
        @error('security_services')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
@include('dashboard.working-space.components.images')
