<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('payment_method' ,__('general.payment_method').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('payment_method', \App\Services\GeneralService::getPaymentTypesForDropdown(),null,['id'=>'payment_method',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_payment_method'),'required','style'=>'width:100%',
            'onchange' => 'getPaymentSubMethods(this);'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('payment_sub_method' ,__('general.payment_sub_method').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('payment_sub_method', [],null,['id'=>'payment_sub_method',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_payment_sub_method'),'required','style'=>'width:100%',
            'onchange' => 'setPaymentView();'])
        !!}
    </div>
</div>
<hr>
