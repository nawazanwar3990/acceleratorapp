<div class="row mb-2">
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('building_id' ,__('general.building_name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::select('building_id', \App\Services\BuildingService::getBuildingDropdown(),null,['id'=>'building_id',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_building_name'),'required','style'=>'width:100%',
            'onchange' => 'getFloorDetails();'])
        !!}
        @error('floor_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('floor_id' ,__('general.floor_name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::select('floor_id', \App\Services\FloorService::getFloorsForDropdown(),null,['id'=>'floor_id',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_floor_name'),'required','style'=>'width:100%',
            'onchange' => 'getFloorDetails();'])
        !!}
        @error('floor_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.flat_name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.flat_name'), 'required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('number' ,__('general.flat_number') ,['class'=>'col-form-label']))   !!}
        {!!  Form::number('number',null,['id'=>'number','class'=>'form-control ','placeholder'=>__('general.flat_number')]) !!}
        @error('number')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('flat_type_id' ,__('general.flat_type').'<i class="text-danger">*</i>',['class'=>'col-form-label']))   !!}
        {!!  Form::select('flat_type_id', \App\Services\FlatService::getFlatTypesForDropdown(),null,['id'=>'flat_type_id',
            'class'=>'select2 form-control form-select', 'placeholder'=>__('general.flat_type'),'style'=>'width:100%', 'required'])
        !!}
        @error('flat_type_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('price' ,__('general.price'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('price',null,['id'=>'price',
            'class'=>'select2 form-control', 'placeholder'=>__('general.price'),'style'=>'width:100%'])
        !!}
        @error('price')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('creation_date' ,__('general.creation_date') ,['class'=>'col-form-label']))   !!}

        <div class="input-group">
            {!!  Form::text('creation_date',isset($for) ? \App\Services\GeneralService::formatDate($model->creation_date): \App\Services\GeneralService::formatDate(\Carbon\Carbon::today()),['id'=>'creation_date','class'=>'form-control datepicker']) !!}
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
        @error('creation_date')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('facing' ,__('general.facing'),['class'=>'col-form-label']))   !!}
        {!!  Form::select('facing',\App\Services\FlatService::facingDropdown(),null,['id'=>'facing',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_facing'),'style'=>'width:100%'])
        !!}
        @error('facing')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('view' ,__('general.view_location'),['class'=>'col-form-label']))   !!}
        {!!  Form::select('view', \App\Services\FlatService::getFlatViewsForDropdown(),null,['id'=>'view',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_view_location'),'style'=>'width:100%'])
        !!}
        @error('view')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('accommodation' ,__('general.number_of_accommodation'),['class'=>'col-form-label']))   !!}
        {!!  Form::select('accommodation', \App\Services\FlatService::flatNoOfAccommodationForDropdown(),null,['id'=>'accommodation',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_number_of_accommodation'),'style'=>'width:100%'])
        !!}
        @error('accommodation')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('latitude' ,__('general.latitude'),['class'=>'form-label']))   !!}
        {!!  Form::text('latitude',null,['id'=>'latitude',
            'class'=>'select2 form-control', 'placeholder'=>__('general.latitude'),'style'=>'width:100%'])
        !!}
        @error('price')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('longitude' ,__('general.longitude'),['class'=>'form-label']))   !!}
        {!!  Form::text('longitude',null,['id'=>'longitude',
            'class'=>'select2 form-control', 'placeholder'=>__('general.longitude'),'style'=>'width:100%'])
        !!}
        @error('price')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('furnished' ,__('general.furnished') ,['class'=>'form-label']))   !!}
        <div class="form-check form-switch">
            {!! Form::checkbox('furnished', true, isset($for) ? $model->furnished : false,['class'=>'form-check-input']) !!}
        </div>
    </div>
    <div class="col-3 mb-3" id="furnished_details"
         style="{{ isset($for) ? ($model->furnished == true ? '' : 'display:none;'): 'display: none;' }}">
        {!!  Html::decode(Form::label('furnished_details' ,__('general.details') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('furnished_details',null,['id'=>'furnished_details','class'=>'form-control ','placeholder'=>__('general.details')]) !!}
    </div>
</div>

