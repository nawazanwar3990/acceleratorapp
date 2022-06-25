<div class="row mb-2 1-3">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('commodity_type_id' ,__('general.commodity_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('commodity_type_id', \App\Services\RealEstate\CommodityService::getCommodityTypesForDropdown(),null,['id'=>'commodity_type_id',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_commodity_type'),'style'=>'width:100%',
            'required', 'onchange' => 'getCommoditySubTypes();'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('commodity_sub_type_id' ,__('general.commodity_sub_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('commodity_sub_type_id', [],null,['id'=>'commodity_sub_type_id', 'required',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_commodity_sub_type'),'style'=>'width:100%'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('commodity_units' ,__('general.no_of_units').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('commodity_units',null,['step'=>'any','min'=>'1','id'=>'commodity_units','class'=>'form-control', 'required']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('commodity_unit_value' ,__('general.unit_price').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('commodity_unit_value',null,['step'=>'any','min'=>'1','id'=>'commodity_unit_value','class'=>'form-control', 'required']) !!}
    </div>
</div>
<div class="row mb-2 1-3">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('total_amount' ,__('general.total_amount').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('total_amount',null,['id'=>'total_amount','class'=>'form-control text-right','placeholder'=>'0.00', 'required', 'readonly', 'tabindex'=>'-1']) !!}
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
<div class="row mb-2 1-3">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('down_payment' ,__('general.down_payment').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('down_payment',null,['step'=>'1', 'min'=>'1', 'id'=>'down_payment','class'=>'form-control','placeholder'=>'0.00', 'onchange' => 'applyCalculation();', 'onkeyup' => 'applyCalculation();', 'required']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('balance' ,__('general.balance') ,['class'=>'form-label']))   !!}
        {!!  Form::text('balance',null,['id'=>'balance','class'=>'form-control','placeholder'=>'0.00', 'readonly', 'tabindex'=>'-1']) !!}
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
