<div class="row justify-content-center d-none" id="employee_detail_holder">
    <div class="col-12 mb-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">{{ __('general.employee_information') }}</h4>
            </div>
            <div class="card-body">
                <div class="text-center">
                    @foreach(\App\Enum\EmployeeTypeEnum::getTranslationKeys() as $emp_key=>$emp_value)
                        <div class="form-check form-switch form-check-inline">
                            {!! Form::radio('f_emp_type',$emp_key,false,['id'=>$emp_key,'class'=>'form-check-input','onchange'=>'change_emp_type(this)']) !!}
                            {!! Form::label($emp_key,$emp_value,['class'=>'form-check-label']) !!}
                        </div>
                    @endforeach
                </div>
                <section class="d-none" id="employee_type_holder">
                    <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            {!!  Html::decode(Form::label('f_emp_location' ,__('general.employee_location'),['class'=>'form-label']))   !!}
                            {!!  Form::text('f_emp_location',$model->f_emp_location??null,['id'=>'f_emp_location','class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-6 mb-3">
                            {!!  Html::decode(Form::label('f_emp_timing' ,__('general.employee_timing'),['class'=>'form-label']))   !!}
                            {!!  Form::text('f_emp_timing',$model->f_emp_timing??null,['id'=>'f_emp_timing','class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-6 mb-3">
                            {!!  Html::decode(Form::label('f_emp_designation' ,__('general.employee_designation'),['class'=>'form-label']))   !!}
                            {!!  Form::text('f_emp_designation',$model->f_emp_designation??null,['id'=>'f_emp_designation','class'=>'form-control']) !!}
                        </div>
                        <div class="col-md-6 mb-3">
                            {!!  Html::decode(Form::label('f_emp_description' ,__('general.employee_description'),['class'=>'form-label']))   !!}
                            {!!  Form::text('f_emp_description',$model->f_emp_description??null,['id'=>'f_emp_description','class'=>'form-control']) !!}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
