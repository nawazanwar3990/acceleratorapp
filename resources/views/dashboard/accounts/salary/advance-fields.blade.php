<div class="row mb-2">
    <div class="col-md-3">
        {!! Html::decode(Form::label('salary_month' ,__('general.salary_month').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        <div class="input-group">
            {!! Form::text('salary_month',\Carbon\Carbon::today()->format('F-Y'), ['id'=>'salary_month','class'=>'form-control', 'autocomplete'=>'off', 'required']) !!}
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
    <div class="col-md-3">
        {!! Html::decode(Form::label('department_id' ,__('general.department').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!! Form::select('department_id',\App\Services\RealEstate\HrService::departmentForDropdown(), null,
            ['id'=>'department_id','class'=>'form-control select2','placeholder'=>trans('general.ph_department'),
             'style' => 'width:100%;', 'required', 'onchange'=>'getDepartmentEmployees();']) !!}
    </div>
    <div class="col-md-3 employee-col" style="display: none;">
        {!! Html::decode(Form::label('employee_id' ,__('general.employee').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!! Form::select('employee_id',[], null,
            ['id'=>'employee_id','class'=>'form-control select2','placeholder'=>trans('general.ph_employee'),
            'onchange' => 'getEmployeeSalary();', 'style' => 'width:100%;', 'required']) !!}
    </div>
    <div class="col-md-3 advance-col" style="display: none;">
        {!! Html::decode(Form::label('advance' ,__('general.advance').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!! Form::number('advance',null, ['step'=>'1', 'min'=> '1','id' => 'advance','class' => 'form-control', 'required', 'onchange' => 'calculateAdvance();', 'onkeyup' => 'calculateAdvance();']) !!}
    </div>
</div>
<div class="row mb-2 details-row" style="display: none;">
    <div class="col-md-3">
        {!! Html::decode(Form::label('total_salary' ,__('general.salary') ,['class'=>'form-label'])) !!}
        {!! Form::text('total_salary',null, ['id' => 'total_salary','class' => 'form-control', 'readonly', 'tabindex' => '-1']) !!}
    </div>
    <div class="col-md-3">
        {!! Html::decode(Form::label('advance_taken' ,__('general.advance_taken') ,['class'=>'form-label'])) !!}
        {!! Form::text('advance_taken',null, ['id' => 'advance_taken','class' => 'form-control', 'readonly', 'tabindex' => '-1']) !!}
    </div>
    <div class="col-md-3">
        {!! Html::decode(Form::label('deduction' ,__('general.loan_deduction') ,['class'=>'form-label'])) !!}
        {!! Form::number('deduction',null, ['step' => '1', 'min' => '0', 'id' => 'deduction','class' => 'form-control', 'onkeyup'=>'calculateAfterLoan();', 'onchange'=>'calculateAfterLoan();']) !!}
    </div>
    <div class="col-md-3">
        {!! Html::decode(Form::label('paid_salary' ,__('general.remaining_salary') ,['class'=>'form-label'])) !!}
        {!! Form::text('paid_salary',null, ['id' => 'paid_salary','class' => 'form-control', 'readonly', 'tabindex' => '-1']) !!}
        {!! Form::hidden('temp_remaining_salary',null, ['id'=>'temp_remaining_salary']) !!}
    </div>
</div>
