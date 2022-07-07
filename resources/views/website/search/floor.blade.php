<div class="card">
    <div class="card-header bg-transparent">
        <h5 class="card-title m-0">Search</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 mb-3">
                {!!  Html::decode(Form::label('building_id' ,__('general.building_name') ,['class'=>'col-form-label']))   !!}
                {!!  Form::select('building_id', \App\Services\BuildingService::getBuildingDropdown(),null,['id'=>'building_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_building_name'),'required','style'=>'width:100%',
                    'onchange' => 'getFloorDetails();'])
                !!}
                @error('floor_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-12 mb-3">
                {!!  Html::decode(Form::label('name' ,__('general.floor_name') ,['class'=>'form-label']))   !!}
                {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.floor_name'), 'required']) !!}
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-12 mb-3">
                {!!  Html::decode(Form::label('number' ,__('general.floor_number') ,['class'=>'form-label']))   !!}
                {!!  Form::text('number',null,['id'=>'number','class'=>'form-control ','placeholder'=>__('general.floor_number'), 'required']) !!}
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-12 mb-3">
                {!!  Html::decode(Form::label('type_id' ,__('general.floor_type') ,['class'=>'form-label']))   !!}
                {!!  Form::select('type_id', \App\Services\FloorService::getFloorTypesForDropdown(),null,['id'=>'type_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_floor_type'),'required','style'=>'width:100%'])
                !!}
            </div>
            <div class="col-12 mb-3">
                {!!  Html::decode(Form::label('price' ,__('general.price'),['class'=>'col-form-label']))   !!}
                {!!  Form::text('price',null,['id'=>'price',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.price'),'style'=>'width:100%'])
                !!}
                @error('price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col-12 mb-3">
                {!!  Html::decode(Form::label('no_of_shops_flats' ,__('general.shops_flats') ,['class'=>'form-label']))   !!}
                {!!  Form::text('no_of_shops_flats', 0,['id'=>'no_of_shops_flats', 'class'=>'form-control vertical-spin',])  !!}
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                {!!  Html::decode(Form::label('length' ,__('general.length_ft') ,['class'=>'form-label']))   !!}
                {!!  Form::number('length',null,['id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'required', 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();']) !!}
                @error('length')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 mb-3">
                {!!  Html::decode(Form::label('width' ,__('general.width_ft') ,['class'=>'form-label']))   !!}
                {!!  Form::number('width',null,['id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'required', 'onchange' => 'calculateArea();', 'onkeyup' => 'calculateArea();']) !!}
                @error('width')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-3">
                {!!  Html::decode(Form::label('latitude' ,__('general.latitude'),['class'=>'form-label']))   !!}
                {!!  Form::text('latitude',null,['id'=>'latitude',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.latitude'),'style'=>'width:100%'])
                !!}
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 mb-3">
                {!!  Html::decode(Form::label('longitude' ,__('general.longitude'),['class'=>'form-label']))   !!}
                {!!  Form::text('longitude',null,['id'=>'longitude',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.longitude'),'style'=>'width:100%'])
                !!}
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="card-footer text-center bg-transparent">
        <button type="submit" class="btn btn-dark"><i class="bx bx-search m-r-5"></i>Search</button>
    </div>
</div>
