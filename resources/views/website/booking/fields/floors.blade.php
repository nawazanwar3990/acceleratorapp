<div class="mb-3 row">
    <div class="col-md-12">
        <h4 class="card-title text-purple">{{ __('general.floor_detail') }}</h4>
        <hr>
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('building_id' ,__('general.building_name') ,['class'=>'col-form-label']))   !!}
        {!!  Form::text('building_id',$model->building->name??null,['id'=>'building_id','class'=>'form-control ','placeholder'=>__('general.building_name'), 'readonly']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.floor_name') ,['class'=>'form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.floor_name'), 'readonly']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('number' ,__('general.floor_number') ,['class'=>'form-label']))   !!}
        {!!  Form::text('number',null,['id'=>'number','class'=>'form-control ','placeholder'=>__('general.floor_number'), 'readonly']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('type_id' ,__('general.floor_type') ,['class'=>'form-label']))   !!}
        {!!  Form::text('type_id',$model->type->name??'',['id'=>'type_id', 'class'=>'form-control', 'placeholder'=>__('general.ph_floor_type'),'readonly'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('price' ,__('general.price'),['class'=>'col-form-label']))   !!}
        {!!  Form::text('price',null,['id'=>'price','class'=>'form-control', 'placeholder'=>__('general.price'),'readonly']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('length' ,__('general.length_ft') ,['class'=>'form-label']))   !!}
        {!!  Form::number('length',null,['min' => 1, 'step' => 'any', 'id'=>'length','class'=>'form-control ','placeholder'=>__('general.length'), 'readonly']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('width' ,__('general.width_ft') ,['class'=>'form-label']))   !!}
        {!!  Form::number('width',null,['min' => 1, 'step' => 'any', 'id'=>'width','class'=>'form-control ','placeholder'=>__('general.width'), 'readonly']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('height' ,__('general.height_ft'),['class'=>'form-label']))   !!}
        {!!  Form::number('height',null,['min' => 1, 'step' => 'any', 'id'=>'height','class'=>'form-control ','placeholder'=>__('general.height'), 'readonly']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('area' ,__('general.area_sft') ,['class'=>'form-label']))   !!}
        {!!  Form::number('area',null,['id'=>'area','class'=>'form-control ','placeholder'=>__('general.area'),'readonly']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('no_of_shops_flats' ,__('general.shops_flats') ,['class'=>'form-label']))   !!}
        {!!  Form::text('no_of_shops_flats', 0,['id'=>'no_of_shops_flats', 'class'=>'form-control vertical-spin','readonly'])  !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('latitude' ,__('general.latitude'),['class'=>'form-label']))   !!}
        {!!  Form::text('latitude',null,['id'=>'latitude',
            'class'=>'form-control', 'placeholder'=>__('general.latitude'),'readonly'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('longitude' ,__('general.longitude'),['class'=>'form-label']))   !!}
        {!!  Form::text('longitude',null,['id'=>'longitude',
            'class'=>'form-control', 'placeholder'=>__('general.longitude'),'readonly'])
        !!}
    </div>
</div>
@include('website.booking.fields.services',[
    'general_services'=>$model->all_general_services,
    'security_services'=>$model->all_security_services
])
