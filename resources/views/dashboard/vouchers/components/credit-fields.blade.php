<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('voucher_no' ,__('general.voucher_no') ,['class'=>'form-label']))  !!}
        {!!  Form::text('voucher_no', \App\Services\Accounts\VoucherService::getNextVoucherNo('CV') ,['id'=>'voucher_no','class'=>'form-control', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('date' ,__('general.date').'<i class="text-danger">*</i>' ,['class'=>'form-label']))  !!}
        <div class="input-group">
            {!!  Form::text('date',\App\Services\GeneralService::formatDate(\Carbon\Carbon::today()),['id'=>'date','class'=>'form-control datepicker', 'autocomplete'=>'off']) !!}
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('payment_account' ,__('general.debit_account_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('payment_account', $paymentAccounts, null,['id'=>'payment_account', 'required',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_account_head'),'style'=>'width:100%'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('remarks' ,__('general.remarks') ,['class'=>'form-label']))  !!}
        {!!  Form::textArea('remarks', null ,['id'=>'remarks','class'=>'form-control', 'rows' => '2']) !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered" style="width: 100%;">
            <thead>
                <tr>
                    <th class="text-center">{{ __('general.credit_account_name') }}<i class="text-danger"> *</i></th>
                    <th class="text-center">{{ __('general.head_code') }}</th>
                    <th class="text-center">{{ __('general.narration') }}</th>
                    <th class="text-center">{{ __('general.amount') }} <i class="text-danger"> *</i></th>
                    <th class="text-center">{{ __('general.action') }}</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        {!!  Form::select('creditAccount[]',$accountHeads,null,['class'=>'select2 form-control',
                            'placeholder'=> __('general.ph_account_head') ,'onchange' => 'getAccountHeadCode(this);','required'])
                        !!}
                    </td>
                    <td>
                        {!!  Form::text('headCode[]',null,['class'=>'form-control head-code','readonly','tabindex'=>'-1']) !!}
                    </td>
                    <td >
                        {!!  Form::text('narration[]',null,['class'=>'form-control ']) !!}

                    </td>
                    <td>
                        {!!  Form::number('amount[]',null,['step'=>'any','min'=>'1','class'=>'form-control account-amount' ,'onkeyup'=>'calculateVoucherTotal();','onchange'=>'calculateVoucherTotal();', 'required','autocomplete'=>'off']) !!}
                    </td>
                    <td class="text-center" style="width:15%;">
                        <a href="javascript:void(0);"
                           onclick="removeClonedRow(this);"
                           class="btn btn-sm btn-danger">
                            <i class="fas fa-times-circle"></i>
                        </a>
                        <a href="javascript:void(0);"
                           onclick="cloneRow(this);"
                           class="btn btn-sm btn-info">
                            <i class="fas fa-plus-circle"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
            <tr>
                <td class="text-right" colspan="3">{{ __('general.total') }}</td>
                <td colspan="2">
                    {!!  Form::text('voucher_total',null,['id'=>'voucher_total','class'=>'form-control ','readonly','tabindex'=>'-1']) !!}
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
