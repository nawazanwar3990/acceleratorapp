<div class="row mb-2">
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.flat_name'), 'required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('number' ,__('general.number') ,['class'=>'col-form-label']))   !!}
        {!!  Form::number('number',null,['id'=>'number','class'=>'form-control ','placeholder'=>__('general.flat_number')]) !!}
        @error('number')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('type_id' ,__('general.flat_type').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::select('type_id', \App\Services\OfficeService::getOfficeTypesForDropdown(),null,['id'=>'type_id',
            'class'=>'select2 form-control form-select', 'placeholder'=>__('general.flat_type'),'style'=>'width:100%', 'required'])
        !!}
        @error('flat_type_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('view' ,__('general.view_location'),['class'=>'col-form-label']))   !!}
        {!!  Form::select('view', \App\Services\OfficeService::getOfficeViewsForDropdown(),null,['id'=>'view',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_view_location'),'style'=>'width:100%'])
        !!}
        @error('view')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('sitting_capacity' ,__('general.sitting_capacity'),['class'=>'col-form-label']))   !!}
        {!!  Form::select('sitting_capacity', \App\Services\OfficeService::OfficeSittingCapacityForDropdown(),null,['id'=>'accommodation',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_sitting_capacity'),'style'=>'width:100%'])
        !!}
        @error('sitting_capacity')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('length' ,__('general.length').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::number('length',null,['min' => 1, 'step' => 'any', 'id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'required',  'onchange' => 'calculateArea();']) !!}
        @error('length')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('width' ,__('general.width').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::number('width',null,['min' => 1, 'step' => 'any', 'id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'required', 'onchange' => 'calculateArea();']) !!}
        @error('width')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('height' ,__('general.height').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::number('height',null,['min' => 1, 'step' => 'any', 'id'=>'height','class'=>'form-control ','placeholder'=>__('general.height'), 'required']) !!}
        @error('height')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('area' ,__('general.area'),['class'=>'form-label']))   !!}
        {!!  Form::text('area',null,['id'=>'area','class'=>'form-control ','placeholder'=>'0','readonly', 'required']) !!}
        @error('area')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('furnished' ,__('general.furnished') ,['class'=>'form-label']))   !!}
        <div class="form-check form-switch">
            {!! Form::checkbox('furnished', true, $for=='edit' ? $model->furnished : false,['class'=>'form-check-input']) !!}
        </div>
    </div>
    <div class="col-3 mb-3" id="furnished_details"
         style="{{ $for=='edit' ? ($model->furnished == true ? '' : 'display:none;'): 'display: none;' }}">
        {!!  Html::decode(Form::label('furnished_detail' ,__('general.details') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('furnished_detail',null,['id'=>'furnished_detail','class'=>'form-control ','placeholder'=>__('general.details')]) !!}
    </div>
</div>

