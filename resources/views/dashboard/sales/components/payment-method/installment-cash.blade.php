<div class="row mb-2">
{{--    <div class="col-md-2">--}}
{{--        {!!  Html::decode(Form::label('purchase_price' ,__('general.purchase_price') ,['class'=>'form-label']))   !!}--}}
{{--        {!!  Form::text('purchase_price',null,['id'=>'purchase_price','class'=>'form-control','placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1']) !!}--}}
{{--    </div>--}}
    <div class="col-md-3">
        {!!  Html::decode(Form::label('total_amount' ,__('general.total_amount').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('total_amount', null, ['step'=>'1','min'=>'1','id'=>'total_amount','class'=>'form-control','placeholder'=>'0.00', 'required', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('discount' ,__('general.discount') ,['class'=>'form-label']))   !!}
        {!!  Form::select('discount', \App\Services\GeneralService::getTitleTransferDiscountTypesForDropdown(),null,['id'=>'discount',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_discount'),'style'=>'width:100%',
            'onchange' => 'applyCalculation();'])
        !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('discount_value' ,__('general.discount_value') ,['class'=>'form-label']))   !!}
        {!!  Form::number('discount_value',null,['step'=>'any', 'min'=>'0', 'id'=>'discount_value','class'=>'form-control','placeholder'=>'0.00', 'onchange' => 'applyCalculation();', 'onkeyup' => 'applyCalculation();']) !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('discount_amount' ,__('general.discount_amount') ,['class'=>'form-label']))   !!}
        {!!  Form::text('discount_amount',null,['id'=>'discount_amount','class'=>'form-control text-right','placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('after_discount_amount' ,__('general.after_discount_amount') ,['class'=>'form-label']))   !!}
        {!!  Form::text('after_discount_amount',null,['id'=>'after_discount_amount','class'=>'form-control text-right','placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-3 nopadding">
        {!!  Html::decode(Form::label('installment_plan_id' ,__('general.installment_plan').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        <div class="mb-3">
            <div class="input-group">
                {!!  Form::select('installment_plan_id', \App\Services\InstallmentService::getInstallmentPlansForDropdown(),null,['id'=>'installment_plan_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_installment_plan'),'style'=>'width:80%',
                    'required', 'onchange' => 'getInstallmentDetails();'])
                !!}
                <div class="input-group-append">
                    <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('general.add_installment_plan')}}">
                        <button class="btn btn-success btn-action text-white" type="button" data-bs-toggle="modal" data-bs-target="#add-installment-plan-modal"><i class="fa fa-plus"></i></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('down_payment' ,__('general.down_payment').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('down_payment',null,['step'=>'1', 'min'=>'1', 'id'=>'down_payment','class'=>'form-control','placeholder'=>'0.00', 'onchange' => 'applyCalculation();', 'onkeyup' => 'applyCalculation();', 'required']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('balance' ,__('general.balance') ,['class'=>'form-label']))   !!}
        {!!  Form::text('balance',null,['id'=>'balance','class'=>'form-control','placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1']) !!}
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
    @include('dashboard.sales.components.transfer-fee')
</div>
<div class="row mb-2">
    <div class="col-md-11">
        <h4 class="card-title text-purple">{{ __('general.broker_details') }}</h4>
    </div>
    <div class="col-md-1">
        <span data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('general.add_hr') }}">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add-hr-modal"><i class="fas fa-plus"></i></button>
        </span>
    </div>
    <hr>
    @include('dashboard.sales.components.broker-details')
</div>
<div class="row mb-2">
    <div class="col">
        {!!  Html::decode(Form::label('remarks' ,__('general.remarks') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('remarks',null,['id'=>'remarks','class'=>'form-control', 'rows'=>3]) !!}
    </div>
</div>
@include('dashboard.sales.components.installment-table')
