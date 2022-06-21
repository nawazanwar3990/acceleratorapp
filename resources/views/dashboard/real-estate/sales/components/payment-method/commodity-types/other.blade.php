<div class="row mb-2">
    <h4 class="card-title text-purple">{{ __('general.commodity_details') }}</h4>
    <div class="col-12">
        <table id="commodity-table" class="table table-stripped table-hover table-bordered" style="width:100%;">
            <thead>
            <tr>
                <th>{{ __('general.type') }}</th>
                <th>{{ __('general.volume') }}<span class="text-danger">*</span></th>
                <th>{{ __('general.unit') }}<span class="text-danger">*</span></th>
                <th>{{ __('general.single_unit_value') }}<span class="text-danger">*</span></th>
                <th>{{ __('general.in_form_of') }}</th>
                <th>{{ __('general.total_value') }}</th>
                <th>{{ __('general.remarks') }}</th>
                <th>{{ __('general.action') }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                {!! Form::hidden('commodity[value][]', null,['class'=>'comm-value']) !!}
                {!! Form::hidden('commodity[construction_status][]', null) !!}
                {!! Form::hidden('commodity[property_type][]', null) !!}
                {!! Form::hidden('commodity[model][]', null) !!}
                {!! Form::hidden('commodity[make][]', null) !!}
                {!! Form::hidden('commodity[color][]', null) !!}
                {!! Form::hidden('commodity[chassis_no][]', null) !!}
                {!! Form::hidden('commodity[reg_no][]', null) !!}

                <td>{!! Form::text('commodity[type][]', null,['class'=>'form-control comm-type','readonly', 'tabindex' => '-1']) !!}</td>
                <td>{!! Form::number('commodity[size][]', null,['step'=>'1','min'=>'1','class'=>'form-control comm-size', 'required', 'onchange' => 'calculateCommodityPrice();', 'onkeyup' => 'calculateCommodityPrice();']) !!}</td>
                <td>{!! Form::select('commodity[unit][]', \App\Services\RealEstate\CommodityService::getAssetCommodityUnitsForDropDown(), null,['class'=>'form-select comm-unit', 'required']) !!}</td>
                <td>{!! Form::number('commodity[price][]', null,['step'=>'any','min'=>'1','class'=>'form-control comm-price', 'required', 'onchange' => 'calculateCommodityPrice();', 'onkeyup' => 'calculateCommodityPrice();']) !!}</td>
                <td>{!! Form::select('commodity[in_form_of][]',\App\Services\RealEstate\CommodityService::getCommodityInFormOfForDropDown() , null,['class'=>'form-select comm-in-form-of']) !!}</td>
                <td>{!! Form::text('commodity[total_price][]', '0.00',['class'=>'form-control comm-total-price', 'readonly', 'tabindex' => '-1']) !!}</td>
                <td>{!! Form::text('commodity[remarks][]', null,['class'=>'form-control comm-further-details']) !!}</td>
                <td class="text-center col-1">
                    <a href="javascript:void(0);"
                       onclick="removeCommodityClonedRow(this);"
                       class="btn btn-sm btn-danger">
                        <i class="fas fa-times-circle"></i>
                    </a>
                    <a href="javascript:void(0);"
                       onclick="cloneCommodityRow(this);"
                       class="btn btn-sm btn-info">
                        <i class="fas fa-plus-circle"></i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-2">
        {!!  Html::decode(Form::label('no_of_units' ,__('general.no_of_units') ,['class'=>'form-label']))   !!}
        {!!  Form::text('no_of_units', '1', ['id'=>'no_of_units','class'=>'form-control','placeholder'=>'0', 'required', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('price_value' ,__('general.price_value') ,['class'=>'form-label']))   !!}
        {!!  Form::text('price_value', null, ['id'=>'price_value','class'=>'form-control','placeholder'=>'0.00', 'required', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('down_payment' ,__('general.down_payment').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('down_payment',null,['step'=>'any', 'min'=>'0', 'id'=>'down_payment','class'=>'form-control','placeholder'=>'0.00', 'onchange' => 'calculateCommodityPrice();', 'onkeyup' => 'calculateCommodityPrice();', 'required']) !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('difference' ,__('general.difference') ,['class'=>'form-label']))   !!}
        {!!  Form::text('difference', null, ['id'=>'difference','class'=>'form-control','placeholder'=>'0.00', 'required', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-2">
        {!!  Html::decode(Form::label('receive_remaining' ,__('general.receive_remaining') ,['class'=>'form-label']))   !!}
        <div class="form-check form-switch mt-3">
            {!! Form::checkbox('receive_remaining', true,  false,['class'=>'form-check-input', 'id' => 'receive_remaining', 'onchange' => 'applyCalculation();']) !!}
        </div>
    </div>
</div>
<hr>
