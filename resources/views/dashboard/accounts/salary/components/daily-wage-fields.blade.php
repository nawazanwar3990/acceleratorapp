{!! Form::open(['url' => route('dashboard.salary.store'), 'method' => 'POST','files' => true,'id' =>'salary_form', 'class' => 'solid-validation']) !!}
    <x-created-by-field />

    {!! Form::hidden('autoSalary', false) !!}
    {!! Form::hidden('salary_no', \App\Services\Accounts\VoucherService::getNextVoucherNo('Salary')) !!}
    <div class="row mb-2 mt-2">
        <div class="col-md-3">
            {!! Html::decode(Form::label('salary_month' ,__('general.salary_date') ,['class'=>'form-label'])) !!}
            <div class="input-group">
                {!! Form::text('salary_month',null, ['id' => 'salary_month','class' => 'form-control datepicker']) !!}
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
            </div>
        </div>
        <div class="col-md-3">
            {!! Html::decode(Form::label('employee_id' ,__('general.employee') ,['class'=>'form-label'])) !!}
            {!! Form::select('employee_id',\App\Services\EmployeeService::getEmployeesForDropdown(), null,
                ['id'=>'employee_id','class'=>'form-control select2','placeholder'=>trans('general.ph_employee'),
                'onchange' => 'getEmployeeDailyWage();', 'style' => 'width:100%;']) !!}
        </div>
        <div class="col-md-3">
            {!! Html::decode(Form::label('total_salary' ,__('general.salary') ,['class'=>'form-label'])) !!}
            {!! Form::text('total_salary',null, ['id' => 'total_salary','class' => 'form-control', 'readonly', 'tabindex' => '-1']) !!}
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-3">
            {!! Html::decode(Form::label('deduction' ,__('general.deduction') ,['class'=>'form-label'])) !!}
            {!! Form::number('deduction',null, ['step' => '1', 'min' => '0', 'id' => 'deduction','class' => 'form-control', 'onchange' => 'calculateSalary();', 'onkeyup' => 'calculateSalary();']) !!}
        </div>
        <div class="col-md-3">
            {!! Html::decode(Form::label('deduction_reason' ,__('general.deduction_reason') ,['class'=>'form-label'])) !!}
            {!! Form::text('deduction_reason',null, ['id' => 'deduction_reason','class' => 'form-control']) !!}
        </div>
        <div class="col-md-3">
            {!! Html::decode(Form::label('paid_salary' ,__('general.remaining_salary') ,['class'=>'form-label'])) !!}
            {!! Form::text('paid_salary',null, ['id' => 'paid_salary','class' => 'form-control', 'readonly', 'tabindex' => '-1']) !!}
        </div>
    </div>
<x-buttons :save="true" :cancel="true" :reset="true"
           formID="salary_form" cancelRoute="dashboard.salary.index"></x-buttons>
{!! Form::close() !!}
