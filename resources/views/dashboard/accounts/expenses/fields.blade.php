<div class="row mb-2">
    {!!  Form::hidden('voucher_no', \App\Services\Accounts\VoucherService::getNextVoucherNo('expense'),) !!}
    <div class="col-md-4">
        {!!  Html::decode(Form::label('date' ,__('general.date').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        <div class="input-group">
            {!!  Form::text('date', \App\Services\GeneralService::formatDate( isset($for) ? $model->date : \Carbon\Carbon::today()),['id'=>'date','class'=>'form-control datepicker', 'autocomplete'=>'off', 'required']) !!}
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
        @error('date')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('expense_head_id' ,__('general.expense_head').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::select('expense_head_id', \App\Services\Accounts\ExpenseService::getExpenseHeadsForDropdown(),null,['id'=>'expense_head_id',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_expense_head'),'style'=>'width:100%', 'required'])
        !!}
        @error('expense_head_id')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('payment_account' ,__('general.payment_account').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::select('payment_account', \App\Services\Accounts\AccountsService::getPaymentAccountsForDropdown(),null,['id'=>'payment_account',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_payment_account'),'style'=>'width:100%', 'required'])
        !!}
        @error('payment_account')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-4">
        {!!  Html::decode(Form::label('amount' ,__('general.amount').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('amount', null,['min' => 1, 'step' => 'any', 'id'=>'date','class'=>'form-control', 'placeholder'=>'0', 'required']) !!}
        @error('amount')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('description' ,__('general.details') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('description', null,['id'=>'description','class'=>'form-control', 'rows' => 3]) !!}
    </div>
    <div class="col-md-4">
        {!!  Html::decode(Form::label('attachment' ,__('general.attachment') ,['class'=>'form-label']))   !!}
        {!! Form::file('attachment',['class'=>'form-control dropify', 'data-height' => '65', 'data-allowed-file-extensions' => 'doc docx pdf jppg jpeg bmp png']) !!}
    </div>
</div>
