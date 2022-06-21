<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('parent_head' ,__('general.parent_head').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::select('parent_head', $parentHeads,null,['id'=>'parent_head', 'class'=>'select2 form-control',
            'placeholder'=>__('general.ph_account_head'),'style'=>'width:100%;', 'required'])
        !!}
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('child_account' ,__('general.child_account').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::text('child_account',null,['id'=>'child_account','class'=>'form-control', 'required']) !!}
    </div>
</div>
