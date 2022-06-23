<div class="row mb-3">
    <div class="col-md-3">
        {!!  Html::decode(Form::label('hr_id' ,__('general.human_resource_id').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}

        <div class="input-group">
            {!!  Form::text('hr_id', null, ['id'=>'hr_id', 'class'=>'form-control hr-id', 'required', 'readonly', 'tabindex'=>'-1']) !!}
            @if(!isset($for))
            <div class="input-group-append">
                <button class="btn btn-info btn-lg text-white" type="button" onclick="showHrModal();"><i class="fas fa-paper-plane"></i></button>
            </div>
            @endif
        </div>
    </div>
</div>
<div class="row" id="details-row" style="{{ isset($for) ? '' : 'display: none;' }} ">
    <div class="form-body">
        <h3 class="box-title">{{ __('general.person_info') }}</h3>
        <hr class="m-t-0 m-b-20">
        <div class="row mb-3">
            <div class="col-md-3">
                <div class="mb-3 row">
                    <label class="control-label text-end col-md-6">{{ __('general.first_name') }}</label>
                    <div class="col-md-6">
                        <p class="form-control-static" id="first_name"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 row">
                    <label class="control-label text-end col-md-6">{{ __('general.last_name') }}</label>
                    <div class="col-md-6">
                        <p class="form-control-static" id="last_name"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 row">
                    <label class="control-label text-end col-md-6">{{ __('general.cnic') }}</label>
                    <div class="col-md-6">
                        <p class="form-control-static" id="cnic"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 row">
                    <label class="control-label text-end col-md-6">{{ __('general.gender') }}</label>
                    <div class="col-md-6">
                        <p class="form-control-static" id="gender"></p>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="box-title">{{ __('general.address_and_contact') }}</h3>
        <hr class="m-t-0 m-b-20">
        <div class="row mb-3">
            <div class="col-md-3">
                <div class="mb-3 row">
                    <label class="control-label text-end col-md-6">{{ __('general.cell_1') }}</label>
                    <div class="col-md-6">
                        <p class="form-control-static" id="cell_1"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3 row">
                    <label class="control-label text-end col-md-6">{{ __('general.cell_2') }}</label>
                    <div class="col-md-6">
                        <p class="form-control-static" id="cell_2"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3 row">
                    <label class="control-label text-end col-md-3">{{ __('general.address') }}</label>
                    <div class="col-md-9">
                        <p class="form-control-static" id="address"></p>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="box-title">{{ __('general.other_info') }}</h3>
        <hr class="m-t-0 m-b-20">
        <div class="row mb-3">
            <div class="col-md-4">
                {!!  Html::decode(Form::label('department_id' ,__('general.department').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('department_id', \App\Services\PersonService::departmentForDropdown(),null,['id'=>'department_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_department'),'required','style'=>'width:100%'])
                !!}
            </div>
            <div class="col-md-4">
                {!!  Html::decode(Form::label('designation_id' ,__('general.designation').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('designation_id', \App\Services\PersonService::designationForDropdown(),null,['id'=>'designation_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_designation'),'required','style'=>'width:100%'])
                !!}
            </div>
            <div class="col-md-4">
                {!!  Html::decode(Form::label('working_hours' ,__('general.working_hours') ,['class'=>'form-label']))   !!}
                {!!  Form::number('working_hours', null,['step'=>'1','min'=>'1','id'=>'working_hours','class'=>'form-control','placeholder'=>'0']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                {!!  Html::decode(Form::label('salary_type' ,__('general.salary_type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::select('salary_type', \App\Services\RealEstate\EmployeeService::getSalaryTypesForDropDown(),null,['id'=>'salary_type',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.ph_salary_type'),'required','style'=>'width:100%'])
                !!}
            </div>
            <div class="col-md-4">
                {!!  Html::decode(Form::label('salary' ,__('general.salary').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::number('salary', null,['step'=>'any','min'=>'1','id'=>'salary','class'=>'form-control','placeholder'=>'0.00', 'required']) !!}
            </div>
            <div class="col-md-4">
                {!!  Html::decode(Form::label('loan_percentage' ,__('general.loan_percentage') ,['class'=>'form-label']))   !!}
                {!!  Form::number('loan_percentage', null,['step'=>'any','min'=>'1','id'=>'loan_percentage','class'=>'form-control','placeholder'=>'0.00']) !!}
            </div>
        </div>
    </div>
</div>
