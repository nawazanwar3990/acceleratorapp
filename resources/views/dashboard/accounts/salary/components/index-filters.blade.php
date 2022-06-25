<div class="card">
    <div class="card-header border-0" style="background-color: transparent !important;">
        <div class="row">
            <div class="col-md-10">
                <h4 class="card-title"><i class="fas fa-filter text-purple"></i> {{ __('general.filters') }}</h4>
            </div>
            <div class="col-md-2">
                <div class="card-actions">
                    <a class="btn btn-primary btn-action d-inline-flex align-items-center justify-content-center" data-action="collapse"><i class="ti-plus"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body collapse">
        {!! Form::open(['url' => route('dashboard.salary.index'), 'method' => 'GET','files' => true]) !!}
        <div class="row mb-2">
            <div class="col-md-3">
                {!!  Html::decode(Form::label('employee_id' ,__('general.employee') ,['class'=>'form-label']))   !!}
                {!!  Form::select('employee_id', \App\Services\EmployeeService::getEmployeesForDropdown('all'), request()->has('employee_id')?request()->get('employee_id'):null,['id'=>'employee_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_employee'),'style'=>'width:100%'])
                !!}
            </div>
            <div class="col-md-3">
                {!!  Html::decode(Form::label('salary_month' ,__('general.salary_month') ,['class'=>'form-label']))   !!}
                <div class="input-group">
                    {!!  Form::text('salary_month',request()->has('salary_month')?request()->get('salary_month'):null,['id'=>'salary_month','class'=>'form-control monthpicker', 'autocomplete'=>'off']) !!}
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>
            <div class="col-md-3">
                {!!  Html::decode(Form::label('type' ,__('general.type') ,['class'=>'form-label']))   !!}
                {!!  Form::select('type', $salaryTypes, request()->has('type')?request()->get('type'):null,['id'=>'type',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_salary_type'),'style'=>'width:100%'])
                !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary w-md">{{ __('general.search') }} <i class="fa fa-search"></i></button>
                <a href="{{ route('dashboard.salary.index') }}" class="btn btn-primary w-md">{{ __('general.clear') }} <i class="fa fa-times"></i></a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
