{!!  Form::hidden('hr_no',isset($for) ? $model->hr_no :uniqid()) !!}
<div class="row mb-3">
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('email' ,__('general.email').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('email',null,['id'=>'email','class'=>'form-control ','placeholder'=>__('general.email'),'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('first_name' ,__('general.first_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('first_name',null,['id'=>'first_name','class'=>'form-control ','placeholder'=>__('general.first_name'),'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('middle_name' ,__('general.middle_name') ,['class'=>'form-label']))   !!}
        {!!  Form::text('middle_name',null,['id'=>'middle_name','class'=>'form-control ','placeholder'=>__('general.middle_name')]) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('last_name' ,__('general.last_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('last_name',null,['id'=>'last_name','class'=>'form-control ','placeholder'=>__('general.last_name'),'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('marital_status' ,__('general.marital_status') ,['class'=>'form-label']))   !!}
        {!!  Form::select('marital_status', \App\Services\PersonService::maritalStatusForDropdown(),null,['id'=>'marital_status',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_marital_status')])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('relation_id' ,__('general.relation') ,['class'=>'form-label']))   !!}
        {!!  Form::select('relation_id', \App\Services\PersonService::relationsForDropdown(),null,['id'=>'relation_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_relation')])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('relation_first_name' ,__('general.relation_first_name') ,['class'=>'form-label']))   !!}
        {!!  Form::text('relation_first_name',null,['id'=>'relation_first_name','class'=>'form-control ','placeholder'=>__('general.relation_first_name')]) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('relation_middle_name' ,__('general.relation_middle_name') ,['class'=>'form-label']))   !!}
        {!!  Form::text('relation_middle_name',null,['id'=>'relation_middle_name','class'=>'form-control ','placeholder'=>__('general.relation_middle_name')]) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('relation_last_name' ,__('general.relation_last_name') ,['class'=>'form-label']))   !!}
        {!!  Form::text('relation_last_name',null,['id'=>'relation_last_name','class'=>'form-control ','placeholder'=>__('general.relation_last_name')]) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('cnic' ,__('general.cnic').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('cnic',null,['id'=>'cnic','class'=>'form-control cnic-mask','placeholder'=>__('general.cnic'),'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('passport_number' ,__('general.passport_number') ,['class'=>'form-label']))   !!}
        {!!  Form::text('passport_number',null,['id'=>'passport_number','class'=>'form-control ','placeholder'=>__('general.passport_number')]) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('date_of_birth' ,__('general.date_of_birth').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        <div class="input-group">
            {!!  Form::text('date_of_birth',isset($for) ? \App\Services\GeneralService::formatDate( $model->date_of_birth ) : null,['id'=>'date_of_birth','class'=>'form-control datepicker','placeholder'=>__('general.date_of_birth'), 'required']) !!}
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('gender' ,__('general.gender') ,['class'=>'form-label']))   !!}
        {!!  Form::select('gender', \App\Services\PersonService::genderForDropdown(),isset($for) ? $model->gender : 'male',['id'=>'gender',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_gender'),'required'])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('organization_id' ,__('general.organization') ,['class'=>'form-label']))   !!}
        {!!  Form::select('organization_id', \App\Services\PersonService::organizationsForDropdown(),null,['id'=>'organization_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_organization')])
        !!}
    </div>

    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('department_id' ,__('general.department') ,['class'=>'form-label']))   !!}
        {!!  Form::select('department_id', \App\Services\PersonService::departmentForDropdown(),null,['id'=>'department_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_department')])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('profession_id' ,__('general.profession') ,['class'=>'form-label']))   !!}
        {!!  Form::select('profession_id', \App\Services\PersonService::professionsForDropdown(),null,['id'=>'profession_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_profession')])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('cell_1' ,__('general.cell_priority_1').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('cell_1',null,['id'=>'cell_1','class'=>'form-control mobile-mask','placeholder'=>__('general.cell_priority_1'), 'required']) !!}
    </div>

    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('cell_2' ,__('general.cell_priority_2') ,['class'=>'form-label']))   !!}
        {!!  Form::text('cell_2',null,['id'=>'cell_2','class'=>'form-control mobile-mask','placeholder'=>__('general.cell_priority_2')]) !!}
    </div>

    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('cell_whats_app' ,__('general.cell_whats_app') ,['class'=>'form-label']))   !!}
        {!!  Form::text('cell_whats_app',null,['id'=>'cell_whats_app','class'=>'form-control mobile-mask','placeholder'=>__('general.cell_whats_app')]) !!}
    </div>

    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('landline' ,__('general.landline_no') ,['class'=>'form-label']))   !!}
        {!!  Form::text('landline',null,['id'=>'landline','class'=>'form-control ','placeholder'=>__('general.landline_no')]) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('facebook' ,__('general.facebook') ,['class'=>'form-label']))   !!}
        {!!  Form::text('facebook',null,['id'=>'facebook','class'=>'form-control ','placeholder'=>__('general.facebook')]) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('sec_contact_full_name' ,__('general.full_name') ,['class'=>'form-label']))   !!}
        {!!  Form::text('sec_contact_full_name',null,['id'=>'sec_contact_full_name','class'=>'form-control ','placeholder'=>__('general.full_name')]) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('sec_contact_relation' ,__('general.relation') ,['class'=>'form-label']))   !!}
        {!!  Form::select('sec_contact_relation', \App\Services\PersonService::relationsForDropdown(),null,['id'=>'contact_relation',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_relation')])
        !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('sec_contact' ,__('general.contact') ,['class'=>'form-label']))   !!}
        {!!  Form::text('sec_contact',null,['id'=>'contact','class'=>'form-control ','placeholder'=>__('general.contact')]) !!}
    </div>
    <div class="col-md-3 mb-3 mb-3">
        {!!  Html::decode(Form::label('country_id' ,__('general.country') ,['class'=>'form-label']))   !!}
        {!!  Form::select('country_id', \App\Services\PersonService::countriesForDropdown(),null,['id'=>'country_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_country')])
        !!}
    </div>
    <div class="col-md-3 mb-3 mb-3">
        {!!  Html::decode(Form::label('province_id' ,__('general.province') ,['class'=>'form-label']))   !!}
        {!!  Form::select('province_id', \App\Services\PersonService::provincesForDropdown(),null,['id'=>'province_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_province')])
        !!}
    </div>
    <div class="col-md-3 mb-3 mb-3">
        {!!  Html::decode(Form::label('district_id' ,__('general.city_district') ,['class'=>'form-label']))   !!}
        {!!  Form::select('district_id', \App\Services\PersonService::districtsForDropdown(),null,['id'=>'district_id',
            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_city_district')])
        !!}
    </div>
    <div class="col-md-3 mb-3 mb-3">
        {!!  Html::decode(Form::label('street_no' ,__('general.street_no') ,['class'=>'form-label']))   !!}
        {!!  Form::text('street_no',null,['id'=>'street_no','class'=>'form-control ','placeholder'=>__('general.street_no')]) !!}
    </div>
    <div class="col-md-3 mb-3 mb-3">
        {!!  Html::decode(Form::label('house_no' ,__('general.house_no') ,['class'=>'form-label']))   !!}
        {!!  Form::text('house_no',null,['id'=>'house_no','class'=>'form-control ','placeholder'=>__('general.house_no')]) !!}
    </div>
    <div class="col-md-3 mb-3 mb-3">
        {!!  Html::decode(Form::label('postal_code' ,__('general.postal_code') ,['class'=>'form-label']))   !!}
        {!!  Form::text('postal_code',null,['id'=>'postal_code','class'=>'form-control ','placeholder'=>__('general.postal_code')]) !!}
    </div>
    <div class="col-md-3 mb-3 mb-3">
        {!!  Html::decode(Form::label('post_office' ,__('general.post_office') ,['class'=>'form-label']))   !!}
        {!!  Form::text('post_office',null,['id'=>'post_office','class'=>'form-control ','placeholder'=>__('general.post_office')]) !!}
    </div>
</div>
<div class="row mb-3">
    <p class="text-info">{!! __('general.allowed_image_and_doc') !!}</p>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('first_image' ,__('general.first_image') ,['class'=>'form-label']))   !!}
        {!! Form::file('first_image',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($firstImage) : '']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('second_image' ,__('general.second_image') ,['class'=>'form-label']))   !!}
        {!! Form::file('second_image',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($secondImage) : '']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('third_image' ,__('general.third_image') ,['class'=>'form-label']))   !!}
        {!! Form::file('third_image',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($thirdImage) : '']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('fourth_image' ,__('general.fourth_image') ,['class'=>'form-label']))   !!}
        {!! Form::file('fourth_image',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($fourthImage) : '']) !!}
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-6">
        {!!  Html::decode(Form::label('scanned_document' ,__('general.scanned_document') ,['class'=>'form-label']))   !!}
        {!! Form::file('scanned_document',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'doc docx pdf', 'data-default-file' => isset($for) ? url($document) : '']) !!}
    </div>
    <div class="col-md-6">
        {!!  Html::decode(Form::label('scanned_signature' ,__('general.scanned_signature') ,['class'=>'form-label']))   !!}
        {!! Form::file('scanned_signature',['class'=>'form-control dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp', 'data-default-file' => isset($for) ? url($signature) : '']) !!}
    </div>
</div>
