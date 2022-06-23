<div class="my-3">
    <h4 class="card-title text-purple">{{ __('general.address_details') }}</h4>
    <hr>
    <div class="row">
        <div class="col-md-2 mb-3">
            {!!  Html::decode(Form::label('present_country_id' ,__('general.country') ,['class'=>'form-label']))   !!}
            {!!  Form::select('present_country_id', \App\Services\PersonService::countriesForDropdown(),null,['id'=>'present_country_id',
                'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_country'),
                'onchange' => 'applyAssociation(this, "present_country_id");'])
            !!}
        </div>
        <div class="col-md-2 mb-3">
            {!!  Html::decode(Form::label('present_province_id' ,__('general.province') ,['class'=>'form-label']))   !!}
            {!!  Form::select('present_province_id', \App\Services\PersonService::provincesForDropdown(),null,['id'=>'present_province_id',
                'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_province'),
                'onchange' => 'applyAssociation(this, "present_province_id");'])
            !!}
        </div>
        <div class="col-md-2 mb-3">
            {!!  Html::decode(Form::label('present_district_id' ,__('general.city_district') ,['class'=>'form-label']))   !!}
            {!!  Form::select('present_district_id', \App\Services\PersonService::districtsForDropdown(),null,['id'=>'present_district_id',
                'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_city_district'),
                'onchange' => 'applyAssociation(this, "present_district_id");'])
            !!}
        </div>
        <div class="col-md-2 mb-3">
            {!!  Html::decode(Form::label('present_street_no' ,__('general.street_no') ,['class'=>'form-label']))   !!}
            {!!  Form::text('present_street_no',null,['id'=>'present_street_no','class'=>'form-control ','placeholder'=>__('general.street_no'), 'onchange' => 'manageAddress("present");']) !!}
        </div>
        <div class="col-md-2 mb-3">
            {!!  Html::decode(Form::label('present_house_no' ,__('general.house_no') ,['class'=>'form-label']))   !!}
            {!!  Form::text('present_house_no',null,['id'=>'present_house_no','class'=>'form-control ','placeholder'=>__('general.house_no'), 'onchange' => 'manageAddress("present");']) !!}
        </div>
        <div class="col-md-2 mb-3">
            {!!  Html::decode(Form::label('present_postal_code' ,__('general.postal_code') ,['class'=>'form-label']))   !!}
            {!!  Form::text('present_postal_code',null,['id'=>'present_postal_code','class'=>'form-control ','placeholder'=>__('general.postal_code'), 'onchange' => 'manageAddress("present");']) !!}
        </div>
        <div class="col-md-2 mb-3">
            {!!  Html::decode(Form::label('present_post_office' ,__('general.post_office') ,['class'=>'form-label']))   !!}
            {!!  Form::text('present_post_office',null,['id'=>'present_post_office','class'=>'form-control ','placeholder'=>__('general.post_office'), 'onchange' => 'manageAddress("present");']) !!}
        </div>
        <div class="col-md-2 mb-3">
            {!!  Html::decode(Form::label('present_near_by' ,__('general.near_by') ,['class'=>'form-label']))   !!}
            {!!  Form::text('present_near_by',null,['id'=>'present_near_by','class'=>'form-control ','placeholder'=>__('general.near_by'), 'onchange' => 'manageAddress("present");']) !!}
        </div>
    </div>
</div>




