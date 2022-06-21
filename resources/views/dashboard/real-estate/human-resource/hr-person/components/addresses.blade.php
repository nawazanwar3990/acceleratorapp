<div class="my-3">
{{--    <h2 class="accordion-header" id="addresses_heading">--}}
{{--        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#addresses"--}}
{{--                aria-expanded="false" aria-controls="collapseOne">--}}
{{--            {{ __('general.addresses') }}--}}
{{--        </button>--}}
{{--    </h2>--}}

    <h4 class="card-title text-purple">{{ __('general.address_details') }}</h4>
    <hr>

{{--    <div id="addresses" class="accordion-collapse collapse bg-white" aria-labelledby="addresses_heading"--}}
{{--         data-bs-parent="#accordionExample">--}}
{{--        <div class="accordion-body">--}}
            <div class="fields">
                {{--Present Address--}}
                <div class="row mb-3">
                    <div class="col-12">
                        <h5>{{ __('general.present_address') }}</h5>
                        <hr>
                    </div>
                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('present_country_id' ,__('general.country') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('present_country_id', \App\Services\RealEstate\HrService::countriesForDropdown(),null,['id'=>'present_country_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_country'),
                            'onchange' => 'applyAssociation(this, "present_country_id");'])
                        !!}
                    </div>

                    <div class="col-md-2">
                        {!!  Html::decode(Form::label('present_province_id' ,__('general.province') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('present_province_id', \App\Services\RealEstate\HrService::provincesForDropdown(),null,['id'=>'present_province_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_province'),
                            'onchange' => 'applyAssociation(this, "present_province_id");'])
                        !!}
                    </div>

                    <div class="col-md-2">
                        {!!  Html::decode(Form::label('present_district_id' ,__('general.city_district') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('present_district_id', \App\Services\RealEstate\HrService::districtsForDropdown(),null,['id'=>'present_district_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_city_district'),
                            'onchange' => 'applyAssociation(this, "present_district_id");'])
                        !!}
                    </div>

                    <div class="col-md-2">
                        {!!  Html::decode(Form::label('present_tehsil_id' ,__('general.tehsil') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('present_tehsil_id', \App\Services\RealEstate\HrService::tehsilsForDropdown(),null,['id'=>'present_tehsil_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_tehsil'),
                            'onchange' => 'applyAssociation(this, "present_tehsil_id");'])
                        !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('present_colony_id' ,__('general.colony') ,['class'=>'form-label']))   !!}
                        {!!  Form::select('present_colony_id', \App\Services\RealEstate\HrService::coloniesForDropdown(),null,['id'=>'present_colony_id',
                            'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_colony'),
                            'onchange' => 'applyAssociation(this, "present_colony_id");'])
                        !!}
                    </div>

                </div>
                <div class="row mb-3">

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('present_block' ,__('general.block') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('present_block',null,['id'=>'present_block','class'=>'form-control ','placeholder'=>__('general.block'), 'onchange' => 'manageAddress("present");']) !!}
                    </div>

                    <div class="col-md-2">
                        {!!  Html::decode(Form::label('present_chak_name' ,__('general.chak_name') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('present_chak_name',null,['id'=>'present_chak_name','class'=>'form-control ','placeholder'=>__('general.chak_name'), 'onchange' => 'manageAddress("present");']) !!}
                    </div>

                    <div class="col-md-2">
                        {!!  Html::decode(Form::label('present_chak_no' ,__('general.chak_no') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('present_chak_no',null,['id'=>'present_chak_no','class'=>'form-control ','placeholder'=>__('general.chak_no'), 'onchange' => 'manageAddress("present");']) !!}
                    </div>

                    <div class="col-md-2">
                        {!!  Html::decode(Form::label('present_sector' ,__('general.sector') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('present_sector',null,['id'=>'present_sector','class'=>'form-control ','placeholder'=>__('general.sector'), 'onchange' => 'manageAddress("present");']) !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('present_street_no' ,__('general.street_no') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('present_street_no',null,['id'=>'present_street_no','class'=>'form-control ','placeholder'=>__('general.street_no'), 'onchange' => 'manageAddress("present");']) !!}
                    </div>

                </div>
                <div class="row mb-3">

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('present_house_no' ,__('general.house_no') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('present_house_no',null,['id'=>'present_house_no','class'=>'form-control ','placeholder'=>__('general.house_no'), 'onchange' => 'manageAddress("present");']) !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('present_postal_code' ,__('general.postal_code') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('present_postal_code',null,['id'=>'present_postal_code','class'=>'form-control ','placeholder'=>__('general.postal_code'), 'onchange' => 'manageAddress("present");']) !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('present_post_office' ,__('general.post_office') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('present_post_office',null,['id'=>'present_post_office','class'=>'form-control ','placeholder'=>__('general.post_office'), 'onchange' => 'manageAddress("present");']) !!}
                    </div>

                    <div class="col-md-3">
                        {!!  Html::decode(Form::label('present_near_by' ,__('general.near_by') ,['class'=>'form-label']))   !!}
                        {!!  Form::text('present_near_by',null,['id'=>'present_near_by','class'=>'form-control ','placeholder'=>__('general.near_by'), 'onchange' => 'manageAddress("present");']) !!}
                    </div>
                </div>
                {{--Permanent Address--}}
                <div id="permanent">
                    <div class="row mb-3">
                        <div class="col-12">
                            <p>{{ __('general.permanent_address') }}</p>
                            <hr>
                        </div>
                        <div class="col-12">
                            <br>
                            <div class="form-check form-switch">
                                {!! Form::checkbox('same_above', true, false,['class'=>'form-check-input', 'id' => 'same_address']) !!}
                                {!!  Html::decode(Form::label('same_above' ,__('general.same_above') ,['id'=>'same_above','class'=>'col-form-label','style'=>'padding-top: 0px;']))   !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            {!!  Html::decode(Form::label('permanent_country_id' ,__('general.country') ,['class'=>'form-label']))   !!}
                            {!!  Form::select('permanent_country_id', \App\Services\RealEstate\HrService::countriesForDropdown(),null,['id'=>'permanent_country_id',
                                'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_country'),
                                'onchange' => 'applyAssociation(this, "permanent_country_id");'])
                            !!}
                        </div>

                        <div class="col-md-2">
                            {!!  Html::decode(Form::label('permanent_province_id' ,__('general.province') ,['class'=>'form-label']))   !!}
                            {!!  Form::select('permanent_province_id', \App\Services\RealEstate\HrService::provincesForDropdown(),null,['id'=>'permanent_province_id',
                                'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_province'),
                                'onchange' => 'applyAssociation(this, "permanent_province_id");'])
                            !!}
                        </div>

                        <div class="col-md-2">
                            {!!  Html::decode(Form::label('permanent_district_id' ,__('general.city_district') ,['class'=>'form-label']))   !!}
                            {!!  Form::select('permanent_district_id', \App\Services\RealEstate\HrService::districtsForDropdown(),null,['id'=>'permanent_district_id',
                                'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_city_district'),
                                'onchange' => 'applyAssociation(this, "permanent_district_id");'])
                            !!}
                        </div>

                        <div class="col-md-2">
                            {!!  Html::decode(Form::label('permanent_tehsil_id' ,__('general.tehsil') ,['class'=>'form-label']))   !!}
                            {!!  Form::select('permanent_tehsil_id', \App\Services\RealEstate\HrService::tehsilsForDropdown(),null,['id'=>'permanent_tehsil_id',
                                'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_tehsil'),
                                'onchange' => 'applyAssociation(this, "permanent_tehsil_id");'])
                            !!}
                        </div>

                        <div class="col-md-3">
                            {!!  Html::decode(Form::label('permanent_colony_id' ,__('general.colony') ,['class'=>'form-label']))   !!}
                            {!!  Form::select('permanent_colony_id', \App\Services\RealEstate\HrService::coloniesForDropdown(),null,['id'=>'permanent_colony_id',
                                'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_colony'),
                                'onchange' => 'applyAssociation(this, "permanent_colony_id");'])
                            !!}
                        </div>

                    </div>
                    <div class="row mb-3">

                        <div class="col-md-3">
                            {!!  Html::decode(Form::label('permanent_block' ,__('general.block') ,['class'=>'form-label']))   !!}
                            {!!  Form::text('permanent_block',null,['id'=>'permanent_block','class'=>'form-control ','placeholder'=>__('general.block'), 'onchange' => 'manageAddress("permanent");']) !!}
                        </div>

                        <div class="col-md-2">
                            {!!  Html::decode(Form::label('permanent_chak_name' ,__('general.chak_name') ,['class'=>'form-label']))   !!}
                            {!!  Form::text('permanent_chak_name',null,['id'=>'permanent_chak_name','class'=>'form-control ','placeholder'=>__('general.chak_name'), 'onchange' => 'manageAddress("permanent");']) !!}
                        </div>

                        <div class="col-md-2">
                            {!!  Html::decode(Form::label('permanent_chak_no' ,__('general.chak_no') ,['class'=>'form-label']))   !!}
                            {!!  Form::text('permanent_chak_no',null,['id'=>'permanent_chak_no','class'=>'form-control ','placeholder'=>__('general.chak_no'), 'onchange' => 'manageAddress("permanent");']) !!}
                        </div>

                        <div class="col-md-2">
                            {!!  Html::decode(Form::label('permanent_sector' ,__('general.sector') ,['class'=>'form-label']))   !!}
                            {!!  Form::text('permanent_sector',null,['id'=>'permanent_sector','class'=>'form-control ','placeholder'=>__('general.sector'), 'onchange' => 'manageAddress("permanent");']) !!}
                        </div>

                        <div class="col-md-3">
                            {!!  Html::decode(Form::label('permanent_street_no' ,__('general.street_no') ,['class'=>'form-label']))   !!}
                            {!!  Form::text('permanent_street_no',null,['id'=>'permanent_street_no','class'=>'form-control ','placeholder'=>__('general.street_no'), 'onchange' => 'manageAddress("permanent");']) !!}
                        </div>

                    </div>
                    <div class="row mb-3">

                        <div class="col-md-3">
                            {!!  Html::decode(Form::label('permanent_house_no' ,__('general.house_no') ,['class'=>'form-label']))   !!}
                            {!!  Form::text('permanent_house_no',null,['id'=>'permanent_house_no','class'=>'form-control ','placeholder'=>__('general.house_no'), 'onchange' => 'manageAddress("permanent");']) !!}
                        </div>

                        <div class="col-md-3">
                            {!!  Html::decode(Form::label('permanent_postal_code' ,__('general.postal_code') ,['class'=>'form-label']))   !!}
                            {!!  Form::text('permanent_postal_code',null,['id'=>'permanent_postal_code','class'=>'form-control ','placeholder'=>__('general.postal_code'), 'onchange' => 'manageAddress("permanent");']) !!}
                        </div>

                        <div class="col-md-3">
                            {!!  Html::decode(Form::label('permanent_post_office' ,__('general.post_office') ,['class'=>'form-label']))   !!}
                            {!!  Form::text('permanent_post_office',null,['id'=>'permanent_post_office','class'=>'form-control ','placeholder'=>__('general.post_office'), 'onchange' => 'manageAddress("permanent");']) !!}
                        </div>

                        <div class="col-md-3">
                            {!!  Html::decode(Form::label('permanent_near_by' ,__('general.near_by') ,['class'=>'form-label']))   !!}
                            {!!  Form::text('permanent_near_by',null,['id'=>'permanent_near_by','class'=>'form-control ','placeholder'=>__('general.near_by'), 'onchange' => 'manageAddress("permanent");']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        {!!  Html::decode(Form::label('present_linear_address' ,__('general.present_linear_address') ,['class'=>'form-label']))   !!}
                        {!!  Form::textarea('present_linear_address', null,['id'=>'present_linear_address',
                            'class'=>'form-control', 'placeholder'=>__('general.present_linear_address'), 'rows' => '2', 'readonly', 'tabindex' => '-1'])
                        !!}
                    </div>
                    <div class="col-md-6">
                        {!!  Html::decode(Form::label('permanent_linear_address' ,__('general.permanent_linear_address') ,['class'=>'form-label']))   !!}
                        {!!  Form::textarea('permanent_linear_address', null,['id'=>'permanent_linear_address',
                            'class'=>'form-control', 'placeholder'=>__('general.permanent_linear_address'), 'rows' => '2', 'readonly', 'tabindex' => '-1'])
                        !!}
                    </div>
                </div>
            </div>
        </div>
{{--    </div>--}}

{{--</div>--}}




