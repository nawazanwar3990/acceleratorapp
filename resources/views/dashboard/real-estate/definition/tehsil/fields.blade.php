<div class="mb-3 row mb-3">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
    </div>
    <div class="col-md-5">
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

</div>

<div class="mb-3 row mb-3">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('district_id' ,__('general.district').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
    </div>
    <div class="col-md-5">
        {!!  Form::select('district_id', \App\Services\RealEstate\DistrictService::districtDropDown(),null,['id'=>'district_id',
            'class'=>'select2 form-control form-select', 'placeholder'=>__('general.district'),'style'=>'width:100%;', 'required'])
        !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="mb-3 row">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('status' ,__('general.active').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
    </div>
    <div class="col-md-5">
        <div class="form-check form-switch">
            {!! Form::checkbox('status', true, isset($for) ? $model->status : true,['class'=>'form-check-input']) !!}
        </div>

    </div>
</div>
