<div class="row mb-2">
    <div class="col-md-12">
        <h4 class="card-title text-purple">{{ __('general.flat_detail') }}</h4>
        <hr>
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('building_id' ,__('general.building_name') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('building_id',$model->building->name??null,['id'=>'building_id',
            'class'=>' form-control', 'placeholder'=>__('general.ph_building_name'),'readonly'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('floor_id' ,__('general.floor_name') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('floor_id',$model->floor->name??null,['id'=>'floor_id',
            'class'=>' form-control', 'placeholder'=>__('general.ph_floor_name'),'readonly'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.flat_name') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.flat_name'), 'readonly']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('number' ,__('general.flat_number') ,['class'=>'col-form-label']))   !!}
        {!!  Form::number('number',null,['id'=>'number','class'=>'form-control ','placeholder'=>__('general.flat_number'),'readonly']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('type_id' ,__('general.flat_type'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('type_id',$model->type??null,['id'=>'type_id',
            'class'=>' form-control', 'placeholder'=>__('general.flat_type'),'readonly'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('price' ,__('general.price'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('price',null,['id'=>'price',
            'class'=>' form-control', 'placeholder'=>__('general.price'),'readonly'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('facing' ,__('general.facing'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('facing',\App\Services\OfficeService::facingDropdown($model->facing),['id'=>'facing',
            'class'=>' form-control', 'placeholder'=>__('general.ph_facing'),'readonly'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('view' ,__('general.view_location'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('view', \App\Services\OfficeService::getOfficeViewsForDropdown($model->view),['id'=>'view',
            'class'=>' form-control', 'placeholder'=>__('general.ph_view_location'),'readonly'])
        !!}
    </div>
    <div class="col-4 mb-3">
        {!!  Html::decode(Form::label('accommodation' ,__('general.number_of_accommodation'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('accommodation',null,['id'=>'accommodation',
            'class'=>' form-control', 'placeholder'=>__('general.ph_number_of_accommodation'),'readonly'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('latitude' ,__('general.latitude'),['class'=>'form-label']))   !!}
        {!!  Form::text('latitude',null,['id'=>'latitude',
            'class'=>' form-control', 'placeholder'=>__('general.latitude'),'readonly'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('length' ,__('general.length'),['class'=>'form-label']))   !!}
        {!!  Form::number('length',null,['min' => 1, 'step' => 'any', 'id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'required',  'onchange' => 'calculateArea();']) !!}
    </div>
    <div class="col-2 mb-3">
        {!!  Html::decode(Form::label('width' ,__('general.width'),['class'=>'form-label']))   !!}
        {!!  Form::number('width',null,['min' => 1, 'step' => 'any', 'id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'required', 'onchange' => 'calculateArea();']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('height' ,__('general.height'),['class'=>'form-label']))   !!}
        {!!  Form::number('height',null,['min' => 1, 'step' => 'any', 'id'=>'height','class'=>'form-control ','placeholder'=>__('general.height'), 'required']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('area' ,__('general.area'),['class'=>'form-label']))   !!}
        {!!  Form::text('area',null,['id'=>'area','class'=>'form-control ','placeholder'=>'0','readonly', 'required']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('longitude' ,__('general.longitude'),['class'=>'form-label']))   !!}
        {!!  Form::text('longitude',null,['id'=>'longitude',
            'class'=>' form-control', 'placeholder'=>__('general.longitude'),'readonly'])
        !!}
    </div>
</div>
@include('website.booking.fields.services',[
    'general_services'=>$model->all_general_services,
    'security_services'=>$model->all_security_services
])
