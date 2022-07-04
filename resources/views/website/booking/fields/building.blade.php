<div class="">
    <h4 class="card-title text-purple">{{ __('general.building_details') }}</h4>
    <hr>
    <div class="row">
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('name' ,__('general.name') ,['class'=>'form-label']))   !!}
            {!!  Form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>__('general.name'), 'readonly']) !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('length' ,__('general.length_ft') ,['class'=>'form-label']))   !!}
            {!!  Form::number('length',null,['id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'readonly']) !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('width' ,__('general.width_ft') ,['class'=>'form-label']))   !!}
            {!!  Form::number('width',null,['id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'readonly']) !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('area' ,__('general.saleable_area_sft') ,['class'=>'form-label']))   !!}
            {!!  Form::text('area',null,['id'=>'area','class'=>'form-control ','placeholder'=>__('general.area'),'readonly']) !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('building_corners' ,__('general.building_corners') ,['class'=>'form-label']))   !!}
            {!!  Form::text('building_corners',\App\Services\BuildingService::buildingCornersForDropdown($model->building_corners),['id'=>'area','class'=>'form-control ','placeholder'=>__('general.building_corners'),'readonly']) !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('building_type' ,__('general.building_type') ,['class'=>'form-label']))   !!}
            {!!  Form::text('building_type',\App\Services\BuildingService::buildingTypesForDropdown($model->building_type),['id'=>'building_type','class'=>'form-control ','placeholder'=>__('general.building_type'),'readonly']) !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('property_type' ,__('general.property_type') ,['class'=>'form-label']))   !!}
            {!!  Form::text('property_type',\App\Services\BuildingService::buildingPropertyTypesForDropdown($model->property_type),['id'=>'property_type','class'=>'form-control ','placeholder'=>__('general.property_type'),'readonly']) !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('entry_gates' ,__('general.entry_gates') ,['class'=>'form-label']))   !!}
            {!!  Form::text('entry_gates',\App\Services\BuildingService::buildingEntryGatesForDropdown($model->entry_gates),['id'=>'entry_gates','class'=>'form-control ','placeholder'=>__('general.entry_gates'),'readonly']) !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('no_of_floors' ,__('general.no_of_floors') ,['class'=>'form-label']))   !!}
            {!!  Form::text('no_of_floors',\App\Services\BuildingService::buildingNoOfFloorsForDropdown($model->no_of_floors),['id'=>'no_of_floors','class'=>'form-control ','placeholder'=>__('general.no_of_floors'),'readonly']) !!}
        </div>
        <div class="col-md-3 mb-3">
            {!!  Html::decode(Form::label('facing' ,__('general.facing') ,['class'=>'form-label']))   !!}
            {!!  Form::text('facing',\App\Services\BuildingService::buildingFacingsForDropdown($model->facing),['id'=>'facing','class'=>'form-control ','placeholder'=>__('general.facing'),'readonly']) !!}
        </div>
    </div>
</div>
@include('website.booking.fields.services',[
    'general_services'=>$model->all_general_services,
    'security_services'=>$model->all_security_services
])
