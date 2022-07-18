<div class="row">
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('length' ,__('general.length_ft') ,['class'=>'form-label']))   !!}
        {!!  Form::number('length',null,['id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('width' ,__('general.width_ft') ,['class'=>'form-label']))   !!}
        {!!  Form::number('width',null,['id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('area' ,__('general.saleable_area_sft') ,['class'=>'form-label']))   !!}
        {!!  Form::text('area',null,['id'=>'area','class'=>'form-control ','placeholder'=>__('general.area'), 'readonly']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('building_type' ,__('general.building_type') ,['class'=>'form-label']))   !!}
        {!!  Form::select('building_type', \App\Services\BuildingService::buildingTypesForDropdown(),null,['id'=>'building_type',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_building_type'),'style'=>'width:100%;'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('entry_gates' ,__('general.entry_gates') ,['class'=>'form-label']))   !!}
        {!!  Form::select('entry_gates', \App\Services\BuildingService::buildingEntryGatesForDropdown(),null,['id'=>'entry_gates',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_entry_gates'),'style'=>'width:100%;'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('facing' ,__('general.facing'),['class'=>'form-label']))   !!}
        {!!  Form::select('facing',\App\Services\BuildingService::buildingFacingsForDropdown(),null,['id'=>'facing',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_facing'),'style'=>'width:100%;'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('no_of_floors' ,__('general.no_of_floors').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::select('no_of_floors',\App\Services\BuildingService::no_of_floors(),null,['id'=>'no_of_floors',
            'class'=>'select2 form-control', 'placeholder'=>__('general.select'),'style'=>'width:100%;','required'])
        !!}
    </div>
</div>
<div class="card" id="floor_holder" style="display:none;">
    <div class="card-header">
        <h6 class="card-title">{{ __('general.floor_info') }}</h6>
    </div>
    <div class="card-body">

    </div>
</div>
@include('dashboard.working-spaces.components.images')

