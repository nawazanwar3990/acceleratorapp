<div class="mb-3 row">
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.floor_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.floor_name'), 'required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('number' ,__('general.floor_number').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('number',null,['id'=>'number','class'=>'form-control ','placeholder'=>__('general.floor_number'), 'required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('type_id' ,__('general.floor_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('type_id', \App\Services\FloorService::getFloorTypesForDropdown(),null,['id'=>'type_id',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_floor_type'),'required','style'=>'width:100%'])
        !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('no_of_offices' ,__('general.shops_flats') ,['class'=>'form-label']))   !!}
        {!!  Form::text('no_of_offices', 0,['id'=>'no_of_shops_flats', 'class'=>'form-control vertical-spin',])  !!}
        @error('no_of_offices')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
