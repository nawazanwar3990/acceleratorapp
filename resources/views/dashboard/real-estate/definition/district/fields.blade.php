<div class="form-group row mb-3">
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

<div class="form-group row mb-3">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('province_id' ,__('general.province').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
    </div>
    <div class="col-md-5">
        {!!  Form::select('province_id', \App\Services\RealEstate\ProvinceService::provinceDropDown(),null,['id'=>'province_id',
            'class'=>'select2 form-control form-select', 'placeholder'=>__('general.province'),'style'=>'width:100%;', 'required'])
        !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('status' ,__('general.active').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
    </div>
    <div class="col-md-5">
        <div class="form-check form-switch">
            {!! Form::checkbox('status', true, isset($for) ? $model->status : true,['class'=>'form-check-input']) !!}
        </div>

    </div>
</div>
