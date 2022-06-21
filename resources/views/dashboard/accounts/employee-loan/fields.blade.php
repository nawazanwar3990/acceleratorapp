<div class="row mb-2">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('date' ,__('general.date').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        <div class="input-group">
            {!!  Form::text('date', \App\Services\GeneralService::formatDate( isset($for) ? $model->date : \Carbon\Carbon::today()),['id'=>'date','class'=>'form-control datepicker', 'autocomplete'=>'off', 'required']) !!}
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
    <div class="col-md-3">
        {!!  Html::decode(Form::label('employee_id' ,__('general.employee').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::select('employee_id', \App\Services\RealEstate\EmployeeService::getEmployeesForDropdown('all') ,null,['id'=>'employee_id',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_employee'),'style'=>'width:100%', 'required', 'onchange'=>'getEmployeeLoanDetails();'])
        !!}
    </div>
    <div class="col-md-3 details-row" style="display: none;">
        {!!  Html::decode(Form::label('allowed_loan' ,__('general.allowed_loan') ,['class'=>'form-label']))   !!}
        {!!  Form::text('allowed_loan', null,['id'=>'allowed_loan','class'=>'form-control', 'readonly', 'tabindex'=>'-1']) !!}
        {!!  Form::hidden('allowed_loan_hidden', null,['id'=>'allowed_loan_hidden']) !!}
    </div>
    <div class="col-md-3 details-row"style="display: none;">
        {!!  Html::decode(Form::label('loan_amount' ,__('general.loan_applying') ,['class'=>'form-label']))   !!}
        {!!  Form::number('loan_amount', null,['step'=>'any','min'=>'1', 'id'=>'loan_amount','class'=>'form-control']) !!}
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-3 details-row" style="display: none;">
        {!!  Html::decode(Form::label('return_type' ,__('general.return_condition').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::select('return_type', \App\Services\RealEstate\EmployeeService::loanReturnTypes() ,null,['id'=>'return_type',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_return_condition'),'style'=>'width:100%', 'required', 'onchange'=>'applyReturnCondition();'])
        !!}
    </div>
    <div class="col-md-3 one-time" style="display: none;">
        {!!  Html::decode(Form::label('return_date' ,__('general.return_date').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        <div class="input-group">
            {!!  Form::text('return_date', null,['id'=>'return_date','class'=>'form-control datepicker', 'autocomplete'=>'off']) !!}
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
    <div class="col-md-3 salary-deduct" style="display: none;">
        {!!  Html::decode(Form::label('deduct_type' ,__('general.deduct_condition').'<i class="text-danger">*</i>',['class'=>'form-label']))   !!}
        {!!  Form::select('deduct_type', \App\Services\RealEstate\EmployeeService::loanReturnTypes() ,null,['id'=>'deduct_type',
            'class'=>'select2 form-control', 'placeholder'=>__('general.ph_deduct_type'),'style'=>'width:100%', 'required', 'onchange'=>'getEmployeeLoanDetails();'])
        !!}
    </div>
    <div class="col-md-3 salary-deduct" style="display: none;">
        {!!  Html::decode(Form::label('deduct_value' ,__('general.deduct_value').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::number('deduct_value', null,['step'=>'any','min'=>'1','id'=>'deduct_value','class'=>'form-control']) !!}
    </div>
</div>
