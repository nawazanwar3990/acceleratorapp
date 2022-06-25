<div class="row">
    <div class="col-md-6">
        <div class="row mb-2">
            <div class="col-md-8">
                {!!  Html::decode(Form::label('voucher_no' ,__('general.voucher_no') ,['class'=>'form-label']))  !!}
                {!!  Form::text('voucher_no', \App\Services\Accounts\VoucherService::getNextVoucherNo('CR') ,['id'=>'voucher_no','class'=>'form-control', 'readonly', 'tabindex'=>'-1']) !!}
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-8">
                {!!  Html::decode(Form::label('date' ,__('general.date').'<i class="text-danger">*</i>' ,['class'=>'form-label']))  !!}
                <div class="input-group">
                    {!!  Form::text('date',\App\Services\GeneralService::formatDate(\Carbon\Carbon::today()),['id'=>'date','class'=>'form-control datepicker', 'autocomplete'=>'off']) !!}
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-8">
                {!!  Html::decode(Form::label('flat_id' ,__('general.flat_shop').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                <select name="flat_id" class="form-control flats" id="flat_id" required onchange="getInvoiceOfFlat();">
                    <optgroup class='def-cursor' label="{{ __('general.flat_name') }}" data-building="{{ __('general.building') }}" data-floor="{{ __('general.floor') }}">
                        <option value="" data-building="" data-floor=''>{{ __('general.ph_flat_name') }}</option>
                        @foreach($flatRecords as $record)
                            <option data-building="{{ $record->Building->name }}" data-floor="{{ $record->floor->floor_name }}" value="{{ $record->id }}">
                                {{ $record->flat_number }} - {{ $record->flat_name }}
                            </option>
                        @endforeach
                    </optgroup>
                </select>
            </div>
        </div>
        <div class="row mb-2" id="sales-inv-row" style="display: none;">
            <div class="col-md-8">
                {!!  Html::decode(Form::label('sales' ,__('general.sales_invoice').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('sales', [], null,['id'=>'sales', 'onchange'=>'getSalesDetails();', 'required',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_sales_invoice'),'style'=>'width:100%', 'disabled', 'tabindex'=>'-1'])
                !!}
                {!!  Form::hidden('sales_id',null ,['id'=>'sales_id']) !!}
            </div>
        </div>
        <div class="row mb-2 amount-row" style="display: none;">
            <div class="col-md-8">
                {!!  Html::decode(Form::label('amount' ,__('general.amount').'<i class="text-danger">*</i>' ,['class'=>'form-label']))  !!}
                {!!  Form::number('amount',null ,['step'=>'any','min'=>1,'id'=>'amount','class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'0.00', 'required', 'onchange' => 'applyCalculations();', 'onkeyup' => 'applyCalculations();']) !!}
            </div>
        </div>
        <div class="row mb-2 amount-row" style="display: none;">
            <div class="col-md-8">
                {!!  Html::decode(Form::label('remarks' ,__('general.remarks') ,['class'=>'form-label']))  !!}
                {!!  Form::textarea('remarks',null ,['id'=>'remarks','class'=>'form-control', 'rows' => '2']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row" id="details-row" style="display: none;">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title text-purple">{{ __('general.sales_details') }}</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a id="details-btn" href="" target="_blank" class="btn btn-primary btn-sm">{{ __('general.view_sales_deal') }}</a>
                    </div>
                    <hr>
                </div>

                <table class="table  table-sm" id="details">
                    <tbody>
                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.purchasers') }}</td>
                            <td class="col-5" id="col-owner"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.sales_date') }}</td>
                            <td class="col-5" id="col-date"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">&nbsp;</td>
                            <td class="col-5"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.total_amount') }}</td>
                            <td class="col-5" id="col-total"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.down_payment') }}</td>
                            <td class="col-5" id="col-down-payment"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.last_received') }}</td>
                            <td class="col-5" id="col-last-received"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.total_received') }}</td>
                            <td class="col-5" id="col-received"></td>
                        </tr>

                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.remaining') }}</td>
                            <td class="col-5" id="col-remaining"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">&nbsp;</td>
                            <td class="col-5"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.current_payable') }}</td>
                            <td class="col-5" id="col-payable"></td>
                            {!!  Form::hidden('payable', null, ['id' => 'payable']) !!}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
