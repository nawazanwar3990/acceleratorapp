<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('voucher_no' ,__('general.voucher_no') ,['class'=>'form-label']))  !!}
        {!!  Form::text('voucher_no', \App\Services\Accounts\VoucherService::getNextVoucherNo('Opening') ,['id'=>'voucher_no','class'=>'form-control', 'readonly', 'tabindex'=>'-1']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('date' ,__('general.date').'<i class="text-danger">*</i>' ,['class'=>'form-label']))  !!}
        <div class="input-group">
            {!!  Form::text('date',\App\Services\GeneralService::formatDate(\Carbon\Carbon::today()),['id'=>'date','class'=>'form-control datepicker', 'autocomplete'=>'off']) !!}
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('account_head' ,__('general.account_head').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('account_head', $accountHeads, null,['id'=>'account_head', 'required',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_account_head'),'style'=>'width:100%'])
        !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('payment_type' ,__('general.payment_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('payment_type', \App\Services\Accounts\AccountsService::paymentTypesForDropdown(), null,['id'=>'payment_type', 'required',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_payment_type'),'style'=>'width:100%'])
        !!}
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('amount' ,__('general.amount').'<i class="text-danger">*</i>' ,['class'=>'form-label']))  !!}
        {!!  Form::number('amount', null ,['step' => 'any', 'min' => '1', 'id'=>'amount','class'=>'form-control', 'required', 'autocomplete' => 'off']) !!}
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('remarks' ,__('general.remarks') ,['class'=>'form-label']))  !!}
        {!!  Form::textArea('remarks', null ,['id'=>'remarks','class'=>'form-control', 'rows' => '2']) !!}
    </div>
</div>
