<h4 class="card-title text-purple mt-4">{{ __('general.payment_details') }}</h4>
<hr>
<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('total_amount' ,__('general.total_amount') ,['class'=>'form-label']))   !!}
        {!!  Form::text('total_amount', null,['id'=>'total_amount','class'=>'form-control', 'placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
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
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_payment_sub_method'),'required','style'=>'width:100%'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('installment_plan_id' ,__('general.installment_plan').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        <div class="input-group">
            {!!  Form::select('installment_plan_id', \App\Services\RealEstate\InstallmentService::getInstallmentPlansForDropdown() ,null,['id'=>'installment_plan_id',
                'class'=>'select2 form-control', 'placeholder'=>__('general.ph_installment_plan'),'required','style'=>'width:80%',
                'onchange' => 'getInstallmentDetails();'])
            !!}
            <div class="input-group-append">
                <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('general.add_installment_plan')}}">
                    <button class="btn btn-success btn-action text-white" type="button" data-bs-toggle="modal" data-bs-target="#add-installment-plan-modal"><i class="fa fa-plus"></i></button>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="row mb-2 installment-details-row" style="display: none;">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('installment_duration' ,__('general.installment_duration') ,['class'=>'form-label']))   !!}
        {!!  Form::text('installment_duration',null,['id'=>'installment_duration','class'=>'form-control','placeholder'=>'0', 'readonly', 'tabindex'=>'-1' ]) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('total_installments' ,__('general.total_installments') ,['class'=>'form-label']))   !!}
        {!!  Form::text('total_installments',null,['id'=>'total_installments','class'=>'form-control','placeholder'=>'0', 'readonly', 'tabindex'=>'-1' ]) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('installment_amount' ,__('general.installment_amount') ,['class'=>'form-label']))   !!}
        {!!  Form::text('installment_amount',null,['id'=>'installment_amount','class'=>'form-control','placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1' ]) !!}
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('payment_type' ,__('general.down_payment_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('payment_type', \App\Services\GeneralService::getDiscountTypesForDropdown() ,null,['id'=>'payment_type',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_payment_sub_method'),'required','style'=>'width:100%',
            'onchange' => 'calculateAmount();'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('payment_value' ,__('general.payment_value').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('payment_value', null,['step' => 'any', 'min' => '1', 'id'=>'payment_value','class'=>'form-control', 'placeholder'=>'0.00', 'required', 'onchange' => 'calculateAmount();', 'onkeyup' => 'calculateAmount();']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('payment_amount' ,__('general.down_payment_amount') ,['class'=>'form-label']))   !!}
        {!!  Form::text('payment_amount', null,['id'=>'payment_amount','class'=>'form-control', 'placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('balance' ,__('general.balance') ,['class'=>'form-label']))   !!}
        {!!  Form::text('balance', null,['id'=>'balance','class'=>'form-control', 'placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
</div>
<div class="row">
    <div class="col">
        @include('dashboard.sales.components.installment-table')
    </div>
</div>
