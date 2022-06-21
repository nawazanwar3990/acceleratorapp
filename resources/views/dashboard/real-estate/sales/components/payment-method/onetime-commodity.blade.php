<div class="row mb-2">
    <div class="col-md-2">
        {!!  Html::decode(Form::label('total_amount' ,__('general.total_amount').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('total_amount',null,['id'=>'total_amount','class'=>'form-control text-right','placeholder'=>'0.00', 'required', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('commodity_type_id' ,__('general.commodity_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('commodity_type_id', \App\Services\RealEstate\CommodityService::getCommodityTypesForDropdown(),null,['id'=>'commodity_type_id',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_commodity_type'),'style'=>'width:100%',
            'required', 'onchange' => 'getCommoditySubTypes();'])
        !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('commodity_sub_type_id' ,__('general.commodity_sub_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('commodity_sub_type_id', [],null,['id'=>'commodity_sub_type_id', 'required',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_commodity_sub_type'),'style'=>'width:100%'])
        !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('commodity_units' ,__('general.no_of_units').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('commodity_units',null,['step'=>'1','min'=>'1','id'=>'commodity_units','class'=>'form-control', 'required']) !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('commodity_unit_value' ,__('general.unit_price').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('commodity_unit_value',null,['step'=>'any','min'=>'1','id'=>'commodity_unit_value','class'=>'form-control', 'required']) !!}
    </div>
</div>

<div class="row mb-2">
    @include('dashboard.real-estate.sales.components.transfer-fee')
</div>
<div class="row mb-2">
    <h4 class="card-title text-purple">{{ __('general.broker_details') }}</h4>
    <hr>
    @include('dashboard.real-estate.sales.components.broker-details')
</div>
<div class="row mb-2">
    <div class="col-md-12">
        {!!  Html::decode(Form::label('remarks' ,__('general.remarks') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('remarks',null,['id'=>'remarks','class'=>'form-control', 'rows' => '3']) !!}
    </div>
</div>
