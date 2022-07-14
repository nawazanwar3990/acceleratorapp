<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0">{{trans('general.building_info')}} (Optional)</h6>
    </div>
    <div class="card-body pb-0">
        <div class="row justify-content-center">
            <div class="col-3 mb-3">
                {!!  Html::decode(Form::label('building_id' ,__('general.building'),['class'=>'col-form-label']))   !!}
                {!!  Form::select('building_id',\App\Services\BuildingService::getBuildingDropdown(),null,['id'=>'building_id',
                    'class'=>'select2 form-control form-select', 'placeholder'=>__('general.select'),'style'=>'width:100%'])
                !!}
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h6 class="card-title mb-0">{{trans('general.basic_info')}}</h6>
    </div>
    <div class="card-body">
        <div class="mb-3 row">
            <div class="col-3 mb-3">
                {!!  Html::decode(Form::label('name' ,__('general.floor_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ', 'required']) !!}
            </div>
            <div class="col-3 mb-3">
                {!!  Html::decode(Form::label('number' ,__('general.floor_number').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::text('number',null,['id'=>'number','class'=>'form-control ', 'required']) !!}
            </div>
            <div class="col-3 mb-3">
                {!!  Html::decode(Form::label('type_id' ,__('general.floor_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('type_id', \App\Services\FloorService::getFloorTypesForDropdown(),null,['id'=>'type_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_floor_type'),'required','style'=>'width:100%'])
                !!}
            </div>
            <div class="col-3 mb-3">
                {!!  Html::decode(Form::label('no_of_offices' ,__('general.no_of_offices').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::text('no_of_offices',null,['id'=>'no_of_offices', 'class'=>'form-control vertical-spin','required'])  !!}
            </div>
            <div class="col-3 mb-3">
                {!!  Html::decode(Form::label('length' ,__('general.length'),['class'=>'form-label']))   !!}
                {!!  Form::number('length',null,['min' => 1, 'step' => 'any', 'id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'),  'onchange' => 'calculateArea();']) !!}
            </div>
            <div class="col-3 mb-3">
                {!!  Html::decode(Form::label('width' ,__('general.width'),['class'=>'form-label']))   !!}
                {!!  Form::number('width',null,['min' => 1, 'step' => 'any', 'id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'onchange' => 'calculateArea();']) !!}
            </div>
            <div class="col-3 mb-3">
                {!!  Html::decode(Form::label('height' ,__('general.height'),['class'=>'form-label']))   !!}
                {!!  Form::number('height',null,['min' => 1, 'step' => 'any', 'id'=>'height','class'=>'form-control ','placeholder'=>__('general.height')]) !!}
            </div>
            <div class="col-3 mb-3">
                {!!  Html::decode(Form::label('area' ,__('general.area'),['class'=>'form-label']))   !!}
                {!!  Form::text('area',null,['id'=>'area','class'=>'form-control ','placeholder'=>'0','readonly', 'required']) !!}
            </div>
        </div>
    </div>
</div>
@include('dashboard.working-spaces.components.images')
