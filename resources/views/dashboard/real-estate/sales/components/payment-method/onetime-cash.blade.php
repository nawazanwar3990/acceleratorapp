<div class="row mb-2">
{{--    <div class="col-md-2">--}}
{{--        {!!  Html::decode(Form::label('purchase_price' ,__('general.purchase_price'),['class'=>'form-label']))   !!}--}}
{{--        {!!  Form::text('purchase_price',null,['id'=>'purchase_price','class'=>'form-control','placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1']) !!}--}}
{{--    </div>--}}
    <div class="col-md-3">
        {!!  Html::decode(Form::label('total_amount' ,__('general.total_amount').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('total_amount',null,['step'=>'1','min'=>'1','id'=>'total_amount','class'=>'form-control','placeholder'=>'0.00', 'required', 'readonly', 'tabindex'=>'-1']) !!}
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
    <div class="col-md-3">
        {!!  Html::decode(Form::label('down_payment' ,__('general.down_payment').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('down_payment',null,['step'=>'any', 'min'=>'1', 'id'=>'down_payment','class'=>'form-control','placeholder'=>'0.00', 'onchange' => 'applyCalculation();', 'onkeyup' => 'applyCalculation();', 'required']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('balance' ,__('general.balance') ,['class'=>'form-label']))   !!}
        {!!  Form::text('balance',null,['id'=>'balance','class'=>'form-control','placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1']) !!}
    </div>

</div>
<div class="row mb-2">
    @include('dashboard.real-estate.sales.components.transfer-fee')
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
    @include('dashboard.real-estate.sales.components.broker-details')
</div>
<div class="row mb-2">
    <div class="col-md-12">
        {!!  Html::decode(Form::label('remarks' ,__('general.remarks') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('remarks',null,['id'=>'remarks','class'=>'form-control', 'rows' => '3']) !!}
    </div>
</div>
