<div class="row">
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('length' ,__('general.length_ft').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('length',null,['id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'required', 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();']) !!}
        @error('length')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('width' ,__('general.width_ft').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('width',null,['id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'required', 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();']) !!}
        @error('width')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('area' ,__('general.saleable_area_sft').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('area',null,['id'=>'area','class'=>'form-control ','placeholder'=>__('general.area'), 'required', 'readonly']) !!}
        @error('area')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('building_type' ,__('general.building_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('building_type', \App\Services\BuildingService::buildingTypesForDropdown(),null,['id'=>'building_type',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_building_type'),'style'=>'width:100%;', 'required'])
        !!}
        @error('building_corners')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('entry_gates' ,__('general.entry_gates').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('entry_gates', \App\Services\BuildingService::buildingEntryGatesForDropdown(),null,['id'=>'entry_gates',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_entry_gates'),'style'=>'width:100%;', 'required'])
        !!}
        @error('entry_gates')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('no_of_floors' ,__('general.no_of_floors').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('no_of_floors',\App\Services\BuildingService::buildingNoOfFloorsForDropdown(),null,['id'=>'no_of_floors',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_no_of_floors'),'style'=>'width:100%;', 'required'])
        !!}
        @error('no_of_floors')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('facing' ,__('general.facing').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('facing',\App\Services\BuildingService::buildingFacingsForDropdown(),null,['id'=>'facing',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_facing'),'style'=>'width:100%;', 'required'])
        !!}
        @error('facing')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
@include('dashboard.working-spaces.components.images')

