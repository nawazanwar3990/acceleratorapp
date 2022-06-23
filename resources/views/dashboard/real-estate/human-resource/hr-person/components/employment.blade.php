<div class="my-3">
{{--    <h2 class="accordion-header" id="employment_heading">--}}
{{--        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#employment"--}}
{{--                aria-expanded="false" aria-controls="collapseOne">--}}
{{--            {{ __('general.employment') }}--}}
{{--        </button>--}}
{{--    </h2>--}}

    <h4 class="card-title text-purple">{{ __('general.employment_information') }}</h4>
    <hr>

{{--    <div id="employment" class="accordion-collapse collapse bg-white" aria-labelledby="employment_heading"--}}
{{--         data-bs-parent="#accordionExample">--}}
{{--        <div class="accordion-body">--}}
            <div class="fields">
                {{--General Row--}}
                <div class="row mb-3">
                    <div class="col-12">
                        <p>{{ __('general.general') }}</p>
                    </div>
                    <hr>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('employment_type_id' ,__('general.employee_type') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('employment_type_id', \App\Services\RealEstate\HrService::employeeTypeForDropdown(),null,['id'=>'employment_type_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_employee_type'), 'onchange' => 'updateEmploymentView();'])
                        !!}
                    </div>

{{--                    <div class="col-md-3">--}}
{{--                        {!!  Html::decode(Form::label('employment_sub_type_id' ,__('general.employee_sub_type') ,['class'=>'form-label']))   !!}--}}
{{--                        {!!  Form::select('employment_sub_type_id', \App\Services\RealEstate\HrService::employeeSubTypeForDropdown(),null,['id'=>'employment_sub_type_id',--}}
{{--                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_employee_sub_type')])--}}
{{--                        !!}--}}
{{--                    </div>--}}

{{--                    <div class="col-md-3">--}}
{{--                        {!!  Html::decode(Form::label('job_address_1' ,__('general.job_address_1') ,['class'=>'form-label']))   !!}--}}
{{--                        {!!  Form::text('job_address_1',null,['id'=>'job_address_1','class'=>'form-control ','placeholder'=>__('general.job_address_1')]) !!}--}}
{{--                    </div>--}}

{{--                    <div class="col-md-3">--}}
{{--                        {!!  Html::decode(Form::label('job_address_2' ,__('general.job_address_2') ,['class'=>'form-label']))   !!}--}}
{{--                        {!!  Form::text('job_address_2',null,['id'=>'job_address_2','class'=>'form-control ','placeholder'=>__('general.job_address_2')]) !!}--}}
{{--                    </div>--}}

                </div>

                {{--Govt. Rows--}}
                <div class="row mb-3 row-govt" style="display: none;">
                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('federal_provincial_id' ,__('general.federal_provincial') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('federal_provincial_id', \App\Services\RealEstate\HrService::provincesForDropdown(),null,['id'=>'federal_provincial_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_federal_provincial')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('ministry_id' ,__('general.ministry') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('ministry_id', \App\Services\RealEstate\HrService::ministryForDropdown(),null,['id'=>'ministry_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_ministry')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('govt_organization_id' ,__('general.organization') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('govt_organization_id', \App\Services\RealEstate\HrService::organizationsForDropdown(),null,['id'=>'govt_organization_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_organization')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('govt_department_id' ,__('general.department') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('govt_department_id', \App\Services\RealEstate\HrService::departmentForDropdown(),null,['id'=>'govt_department_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_department')])
                        !!}
                    </div>
                </div>
                <div class="row mb-3 row-govt" style="display: none;">
                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('govt_current_last_served' ,__('general.current_last_served') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('govt_current_last_served',null,['id'=>'govt_current_last_served',
                            'class'=>'form-control', 'placeholder'=>__('general.current_last_served')])
                        !!}
                    </div>
                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('govt_grade_id' ,__('general.grade') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('govt_grade_id', \App\Services\RealEstate\HrService::gradesForDropdown(),null,['id'=>'govt_grade_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_grade')])
                        !!}
                    </div>
                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('govt_profession_id' ,__('general.profession') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('govt_profession_id', \App\Services\RealEstate\HrService::professionsForDropdown(),null,['id'=>'govt_profession_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_profession')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('govt_serving_retired' ,__('general.serving_retired') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('govt_serving_retired',\App\Services\RealEstate\HrService::serviceOrRetiredForDropdown(), null,['id'=>'govt_serving_retired',
                            'style' => 'width:100%;', 'class'=>'select2 form-control','placeholder'=>__('general.ph_serving_retired')])
                        !!}
                    </div>


                </div>
                <div class="row md-3 row-govt" style="display: none;">
                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('govt_date_of_joining' ,__('general.date_of_joining') ,['class'=>'form-label']))   !!}
                        <div class="input-group">
                            {!!  Form::text('govt_date_of_joining',isset($for) ? \App\Services\GeneralService::formatDate( $model->govt_date_of_joining ) : null,['id'=>'govt_date_of_joining','class'=>'form-control datepicker','placeholder'=>__('general.date_of_joining')]) !!}
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </div>

                    </div>
                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('govt_date_of_retirement' ,__('general.date_of_retirement') ,['class'=>'form-label']))   !!}
                        <div class="input-group">
                            {!!  Form::text('govt_date_of_retirement',isset($for) ? \App\Services\GeneralService::formatDate( $model->govt_date_of_retirement ) : null,['id'=>'govt_date_of_retirement','class'=>'form-control datepicker','placeholder'=>__('general.date_of_retirement')]) !!}
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                    </div>
                </div>
                {{--Private Rows--}}
                <div class="row mb-3 row-private" style="display: none;">
                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('private_organization_id' ,__('general.organization') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('private_organization_id', \App\Services\RealEstate\HrService::organizationsForDropdown(),null,['id'=>'private_organization_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_organization')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('private_department_id' ,__('general.department') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('private_department_id', \App\Services\RealEstate\HrService::departmentForDropdown(),null,['id'=>'private_department_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_department')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('private_current_last_served' ,__('general.current_last_served') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('private_current_last_served',null,['id'=>'private_current_last_served',
                            'class'=>'form-control', 'placeholder'=>__('general.current_last_served')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('private_grade_id' ,__('general.grade') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('private_grade_id', \App\Services\RealEstate\HrService::gradesForDropdown(),null,['id'=>'private_grade_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_grade')])
                        !!}
                    </div>
                </div>
                <div class="row mb-3 row-private" style="display: none;">
                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('private_profession_id' ,__('general.profession') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('private_profession_id', \App\Services\RealEstate\HrService::professionsForDropdown(),null,['id'=>'private_profession_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.profession')])
                        !!}
                    </div>
                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('private_serving_retired' ,__('general.serving_retired') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('private_serving_retired',\App\Services\RealEstate\HrService::serviceOrRetiredForDropdown(), null,['id'=>'private_serving_retired',
                            'style' => 'width:100%;', 'class'=>'select2 form-control','placeholder'=>__('general.ph_serving_retired')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('private_date_of_joining' ,__('general.date_of_joining') ,['class'=>'form-label']))   !!}
                        <div class="input-group">
                            {!!  Form::text('private_date_of_joining', isset($for) ? \App\Services\GeneralService::formatDate( $model->private_date_of_joining ) : null,['id'=>'private_date_of_joining','class'=>'form-control datepicker','placeholder'=>__('general.date_of_joining')]) !!}
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </div>

                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('private_date_of_retirement' ,__('general.date_of_retirement') ,['class'=>'form-label']))   !!}
                        <div class="input-group">
                            {!!  Form::text('private_date_of_retirement',isset($for) ? \App\Services\GeneralService::formatDate( $model->private_date_of_retirement ) : null ,['id'=>'private_date_of_retirement','class'=>'form-control datepicker','placeholder'=>__('general.date_of_retirement')]) !!}
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </div>

                    </div>

                </div>
                {{--Own Business--}}
                <div class="row mb-3 row-own" style="display: none;">
                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('own_business' ,__('general.own_business') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('own_business',null,['id'=>'own_business','class'=>'form-control ','placeholder'=>__('general.own_business')]) !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('owner_partner' ,__('general.owner_partner') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('owner_partner', \App\Services\RealEstate\HrService::ownerOrPartnerForDropdown(),null,['id'=>'owner_partner',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_owner_partner')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('own_business_id' ,__('general.business_type') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('own_business_id', \App\Services\RealEstate\HrService::businessTypesForDropdown(),null,['id'=>'own_business_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_business_type')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('own_business_sub_id' ,__('general.business_sub_type') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('own_business_sub_id', \App\Services\RealEstate\HrService::businessSubTypesForDropdown(),null,['id'=>'own_business_sub_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_business_sub_type')])
                        !!}
                    </div>

                </div>
                {{--Tax Row--}}
                <div class="row mt-3 mb-3">
                    <div class="col-12">
                        <p>{{ __('general.tax') }}</p>
                    </div>
                    <hr>
                    <div class="col-md-3 mb-3">
                        {!!  Html::decode(Form::label('tax_type_id' ,__('general.tax_type') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('tax_type_id', \App\Services\RealEstate\HrService::taxTypeForDropdown(),null,['id'=>'tax_type_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_tax_type')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('tax_status_id' ,__('general.tax_status') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('tax_status_id', \App\Services\RealEstate\HrService::taxStatusForDropdown(),null,['id'=>'tax_status_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_tax_status')])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('tax_no' ,__('general.tax_no') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('tax_no',null,['id'=>'tax_no','class'=>'form-control ','placeholder'=>__('general.tax_no')]) !!}
                    </div>

                </div>

            </div>
        </div>
{{--    </div>--}}

{{--</div>--}}
