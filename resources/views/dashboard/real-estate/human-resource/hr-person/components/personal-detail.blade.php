<div class="">
    {{--    <h2 class="accordion-header" id="personal_detail_heading">--}}
    {{--        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personal_detail"--}}
    {{--                aria-expanded="true" aria-controls="collapseOne">--}}
    {{--            {{ __('general.personal_detail') }}--}}
    {{--        </button>--}}
    {{--    </h2>--}}

    {{--    <div id="personal_detail" class="accordion-collapse collapse show bg-white" aria-labelledby="headingOne"--}}
    {{--         data-bs-parent="#accordionExample">--}}
    {{--        <div class="accordion-body">--}}

    <h4 class="card-title text-purple">{{ __('general.personal_detail') }}</h4>
    <hr>
    <div class="fields">

        <div class="row mb-3">
            <div class="col-md-3">
                {!!  Html::decode(Form::label('first_name' ,__('general.first_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::text('first_name',null,['id'=>'first_name','class'=>'form-control ','placeholder'=>__('general.first_name'),'required']) !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('middle_name' ,__('general.middle_name') ,['class'=>'form-label']))   !!}
                {!!  Form::text('middle_name',null,['id'=>'middle_name','class'=>'form-control ','placeholder'=>__('general.middle_name')]) !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('last_name' ,__('general.last_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::text('last_name',null,['id'=>'last_name','class'=>'form-control ','placeholder'=>__('general.last_name'),'required']) !!}
            </div>
            <div class="col-md-3">
                {!!  Html::decode(Form::label('marital_status' ,__('general.marital_status') ,['class'=>'form-label']))   !!}
                {!!  Form::select('marital_status', \App\Services\RealEstate\HrService::maritalStatusForDropdown(),null,['id'=>'marital_status',
                    'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_marital_status')])
                !!}
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                {!!  Html::decode(Form::label('relation_id' ,__('general.relation') ,['class'=>'form-label']))   !!}
                {!!  Form::select('relation_id', \App\Services\RealEstate\HrService::relationsForDropdown(),null,['id'=>'relation_id',
                    'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_relation')])
                !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('relation_first_name' ,__('general.relation_first_name') ,['class'=>'form-label']))   !!}
                {!!  Form::text('relation_first_name',null,['id'=>'relation_first_name','class'=>'form-control ','placeholder'=>__('general.relation_first_name')]) !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('relation_middle_name' ,__('general.relation_middle_name') ,['class'=>'form-label']))   !!}
                {!!  Form::text('relation_middle_name',null,['id'=>'relation_middle_name','class'=>'form-control ','placeholder'=>__('general.relation_middle_name')]) !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('relation_last_name' ,__('general.relation_last_name') ,['class'=>'form-label']))   !!}
                {!!  Form::text('relation_last_name',null,['id'=>'relation_last_name','class'=>'form-control ','placeholder'=>__('general.relation_last_name')]) !!}
            </div>


        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                {!!  Html::decode(Form::label('cnic' ,__('general.cnic').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                {!!  Form::text('cnic',null,['id'=>'cnic','class'=>'form-control cnic-mask','placeholder'=>__('general.cnic'),'required']) !!}
            </div>
            <div class="col-md-3">
                {!!  Html::decode(Form::label('passport_number' ,__('general.passport_number') ,['class'=>'form-label']))   !!}
                {!!  Form::text('passport_number',null,['id'=>'passport_number','class'=>'form-control ','placeholder'=>__('general.passport_number')]) !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('date_of_birth' ,__('general.date_of_birth').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
                <div class="input-group">
                    {!!  Form::text('date_of_birth',isset($for) ? \App\Services\GeneralService::formatDate( $model->date_of_birth ) : null,['id'=>'date_of_birth','class'=>'form-control datepicker','placeholder'=>__('general.date_of_birth'), 'required']) !!}
                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                </div>
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('cast_id' ,__('general.cast') ,['class'=>'form-label']))   !!}
                {!!  Form::select('cast_id', \App\Services\RealEstate\HrService::castsForDropdown(),null,['id'=>'cast_id',
                    'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_cast')])
                !!}
            </div>
        </div>

        <div class="row mb-3">

            <div class="col-md-3">
                {!!  Html::decode(Form::label('nationality_id' ,__('general.nationality') ,['class'=>'form-label']))   !!}
                {!!  Form::select('nationality_id', \App\Services\RealEstate\HrService::nationalitiesForDropdown(),isset($for) ? $model->nationality_id : 1,['id'=>'nationality_id',
                    'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_nationality')])
                !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('country_stay_in' ,__('general.country_stay_in') ,['class'=>'form-label']))   !!}
                {!!  Form::select('country_stay_in', \App\Services\RealEstate\HrService::countriesForDropdown(),null,['id'=>'country_stay_in',
                    'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_country_stay_in')])
                !!}
            </div>
            <div class="col-md-3">
                {!!  Html::decode(Form::label('gender' ,__('general.gender') ,['class'=>'form-label']))   !!}
                {!!  Form::select('gender', \App\Services\RealEstate\HrService::genderForDropdown(),isset($for) ? $model->gender : 'male',['id'=>'gender',
                    'style' => 'width:100%;', 'class'=>'select2 form-control', 'placeholder'=>__('general.ph_gender'),'required'])
                !!}
            </div>
        </div>

    </div>
</div>
{{--    </div>--}}

{{--</div>--}}
