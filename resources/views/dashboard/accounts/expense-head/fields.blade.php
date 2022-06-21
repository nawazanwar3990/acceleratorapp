<div class="form-group row">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('expense_head_name' ,__('general.expense_head_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
    </div>
    <div class="col-md-5">
        {!!  Form::text('expense_head_name',null,['id'=>'expense_head_name','class'=>'form-control ','placeholder'=>__('general.ph_expense_head_name'), 'required']) !!}
        @error('expense_head_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('parent_id' ,__('general.parent'),['class'=>'form-label']))   !!}
    </div>
    <div class="col-md-5">
        {!!  Form::select('parent_id', $parentHeads,null,['id'=>'parent_id',
            'class'=>'select2 form-control',
            'placeholder'=>__('general.ph_parent_expense_head'),'style'=>'width:100%;', isset($for) ? ' disabled' : ''])
        !!}
    </div>
</div>
