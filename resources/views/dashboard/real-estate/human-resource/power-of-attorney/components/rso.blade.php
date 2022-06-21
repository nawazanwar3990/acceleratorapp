<div class="accordion-item">
    <h2 class="accordion-header" id="header_heading">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#rso_detail"
                aria-expanded="true" aria-controls="collapseOne">
            {{ __('general.poa_reg_and_scrutiny') }}
        </button>
    </h2>
    <div id="rso_detail" class="accordion-collapse collapse bg-white" aria-labelledby="headingOne"
         data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="fields">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <h5>{{ __('general.poa_reg') }}</h5>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('is_reg_at_sub_reg_office','Registartion Status') !!}
                                {!! Form::select('is_reg_at_sub_reg_office',\App\Services\GeneralService::yesOrNoForDropdown(),null,['class'=>'form-control select2','style'=>'width:100%','id'=>'is_reg_at_sub_reg_office','placeholder'=>'Select Option','onchange'=>'manageYesNoStatus(this,"rso");']) !!}
                            </div>
                        </div>
                        <div class="rso_holder h-force-flex">
                            <div class="row">
                                <div class="col-md-4">
                                    {!! Form::label('rso_reg_date','Date') !!}
                                    <div class="input-group">
                                        {!! Form::text('rso_reg_date',\App\Services\GeneralService::formatDate((isset($for) ? $model->date : \Carbon\Carbon::today())),['class'=>'form-control datepicker','id'=>'rso_reg_date']) !!}
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('rso_reg_number','Number') !!}
                                    {!! Form::text('rso_reg_number',null,['class'=>'form-control','id'=>'rso_reg_number']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('rso_reg_at','Registered At') !!}
                                    {!! Form::text('rso_reg_at',null,['class'=>'form-control','id'=>'rso_reg_at']) !!}
                                </div>
                                <div class="col-md-12">
                                    {!! Form::label('rso_narration_remark','Narration remarks') !!}
                                    {!! Form::textarea('rso_narration_remark',null,['class'=>'form-control','id'=>'rso_narration_remark','rows'=>'2']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h5>{{ __('general.scrutiny') }}</h5>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('is_attested','Accepted') !!}
                                {!! Form::select('is_attested',\App\Services\GeneralService::yesOrNoForDropdown(),null,['class'=>'form-control select2','style'=>'width:100%','id'=>'attested','placeholder'=>'Select Option','onchange'=>'manageYesNoStatus(this,"attested");']) !!}
                            </div>
                        </div>
                        <div class="attested_holder h-force-flex">
                            <div class="row">
                                <div class="col-md-4">
                                    {!! Form::label('attested_date','Date') !!}
                                    <div class="input-group">
                                        {!! Form::text('attested_date',\App\Services\GeneralService::formatDate((isset($for) ? $model->date : \Carbon\Carbon::today())),['class'=>'form-control datepicker','id'=>'attested_date']) !!}
                                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('attested_dairy_number','Dairy Number') !!}
                                    {!! Form::text('attested_dairy_number',null,['class'=>'form-control','id'=>'attested_dairy_number']) !!}
                                </div>
                                <div class="col-md-12">
                                    {!! Form::label('attested_narration_remark','Remarks') !!}
                                    {!! Form::textarea('attested_narration_remark',null,['class'=>'form-control','id'=>'attested_narration_remark','rows'=>'2']) !!}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <label>{{ __('general.scrutinised_by') }}</label>
                                </div>
                                <div class="col-md-12">
                                    @include('dashboard.real-estate.common.single-hr-picker', [
                                        'fieldName' => 'attested_by_person_id',
                                        'for' => 'edit',
                                        'records'=>\App\Services\RealEstate\HrService::getHrById($model->attested_by_person_id ?? null)])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
