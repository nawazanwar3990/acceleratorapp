<div class="row">
    <div class="col-md-6">
        <div class="row mb-2">
            <div class="col-md-8">
                {!!  Html::decode(Form::label('voucher_no' ,__('general.voucher_no') ,['class'=>'form-label']))  !!}
                {!!  Form::text('voucher_no', \App\Services\Accounts\VoucherService::getNextVoucherNo('Broker Payment') ,['id'=>'voucher_no','class'=>'form-control', 'readonly', 'tabindex'=>'-1']) !!}
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
                {!!  Html::decode(Form::label('broker_id' ,__('general.broker').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('broker_id', $brokers, null,['id'=>'broker_id', 'required', 'onchange'=>'getBrokerPaymentDetails();',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_broker'),'style'=>'width:100%'])
                !!}
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
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.total_payable') }}</td>
                            <td class="col-5" id="col-total"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">&nbsp;</td>
                            <td class="col-5"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.total_paid') }}</td>
                            <td class="col-5" id="col-paid"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">&nbsp;</td>
                            <td class="col-5"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.last_paid') }}</td>
                            <td class="col-5" id="col-last"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">&nbsp;</td>
                            <td class="col-5"></td>
                        </tr>
                        <tr>
                            <td class="bg-light card-title col-3">{{ __('general.remaining') }}</td>
                            <td class="col-5" id="col-remaining"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
