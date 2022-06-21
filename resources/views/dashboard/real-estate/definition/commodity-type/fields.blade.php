<div class="form-group row">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'col-form-label']))   !!}
    </div>
    <div class="col-md-5">
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
        @error('expense_head_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('parent_id' ,__('general.parent'),['class'=>'col-form-label']))   !!}
    </div>
    <div class="col-md-5">
        {!!  Form::select('parent_id', $parentHeads,null,['id'=>'parent_id',
            'class'=>'select2 form-control',
            'placeholder'=>__('general.ph_parent_expense_head')])
        !!}
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
