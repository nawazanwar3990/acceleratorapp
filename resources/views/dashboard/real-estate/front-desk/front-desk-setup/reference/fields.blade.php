<div class="form-group row">
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

<div class="form-group row">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('description' ,__('general.description') ,['class'=>'col-form-label']))   !!}
    </div>
    <div class="col-md-5">
        {!!  Form::textarea('description',null,['id'=>'description','class'=>'form-control ','placeholder'=>__('general.description'),'rows'=>3]) !!}
    </div>
</div>
