<div class="card">
    <div class="card-header bg-transparent">
        <h5 class="card-title m-0">Search</h5>
    </div>
    <div class="card-body">
         <div class="row">
             <div class="col-12 mb-3">
                 {!!  Html::decode(Form::label('name' ,__('general.name') ,['class'=>'form-label']))   !!}
                 {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
                 @error('name')
                 <div class="text-danger">{{ $message }}</div>
                 @enderror
             </div>
             <div class="col-12 mb-3">
                 {!!  Html::decode(Form::label('building_corners' ,__('general.building_corners') ,['class'=>'form-label']))   !!}
                 {!!  Form::select('building_corners', \App\Services\BuildingService::buildingCornersForDropdown(),null,['id'=>'building_corners',
                     'class'=>'select2 form-control', 'placeholder'=>__('general.ph_building_corners'),'style'=>'width:100%;', 'required'])
                 !!}
                 @error('building_corners')
                 <div class="text-danger">{{ $message }}</div>
                 @enderror
             </div>
             <div class="col-12 mb-3">
                 {!!  Html::decode(Form::label('building_type' ,__('general.building_type') ,['class'=>'form-label']))   !!}
                 {!!  Form::select('building_type', \App\Services\BuildingService::buildingTypesForDropdown(),null,['id'=>'building_type',
                     'class'=>'select2 form-control', 'placeholder'=>__('general.ph_building_type'),'style'=>'width:100%;', 'required'])
                 !!}
                 @error('building_corners')
                 <div class="text-danger">{{ $message }}</div>
                 @enderror
             </div>
             <div class="col-12 mb-3">
                 {!!  Html::decode(Form::label('property_type' ,__('general.property_type') ,['class'=>'form-label']))   !!}
                 {!!  Form::select('property_type', \App\Services\BuildingService::buildingPropertyTypesForDropdown(),null,['id'=>'property_type',
                     'class'=>'select2 form-control', 'placeholder'=>__('general.ph_property_type'),'style'=>'width:100%;', 'required'])
                 !!}
                 @error('building_corners')
                 <div class="text-danger">{{ $message }}</div>
                 @enderror
             </div>
             <div class="col-12 mb-3">
                 {!!  Html::decode(Form::label('price' ,__('general.price'),['class'=>'form-label']))   !!}
                 {!!  Form::text('price',null,['id'=>'price',
                     'class'=>'select2 form-control', 'placeholder'=>__('general.price'),'style'=>'width:100%'])
                 !!}
                 @error('price')
                 <div class="text-danger">{{ $message }}</div>
                 @enderror
             </div>
             <div class="col-12 mb-3">
                 {!!  Html::decode(Form::label('entry_gates' ,__('general.entry_gates') ,['class'=>'form-label']))   !!}
                 {!!  Form::select('entry_gates', \App\Services\BuildingService::buildingEntryGatesForDropdown(),null,['id'=>'entry_gates',
                     'class'=>'select2 form-control', 'placeholder'=>__('general.ph_entry_gates'),'style'=>'width:100%;', 'required'])
                 !!}
                 @error('entry_gates')
                 <div class="text-danger">{{ $message }}</div>
                 @enderror
             </div>
             <div class="col-12 mb-3">
                 {!!  Html::decode(Form::label('no_of_floors' ,__('general.no_of_floors') ,['class'=>'form-label']))   !!}
                 {!!  Form::select('no_of_floors',\App\Services\BuildingService::no_of_floors(),null,['id'=>'no_of_floors',
                     'class'=>'select2 form-control', 'placeholder'=>__('general.ph_no_of_floors'),'style'=>'width:100%;', 'required'])
                 !!}
                 @error('no_of_floors')
                 <div class="text-danger">{{ $message }}</div>
                 @enderror
             </div>
             <div class="col-12 mb-3">
                 {!!  Html::decode(Form::label('facing' ,__('general.facing') ,['class'=>'form-label']))   !!}
                 {!!  Form::select('facing',\App\Services\BuildingService::buildingFacingsForDropdown(),null,['id'=>'facing',
                     'class'=>'select2 form-control', 'placeholder'=>__('general.ph_facing'),'style'=>'width:100%;', 'required'])
                 !!}
                 @error('facing')
                 <span class="text-danger">{{ $message }}</span>
                 @enderror
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
