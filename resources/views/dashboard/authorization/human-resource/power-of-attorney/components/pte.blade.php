<div class="accordion-item">
    <h2 class="accordion-header" id="pte_detail_heading">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pte_detail"
                aria-expanded="true" aria-controls="collapseOne">
            {{ __('general.process_through_embassy') }}
        </button>
    </h2>

    <div id="pte_detail" class="accordion-collapse collapse bg-white" aria-labelledby="headingOne"
         data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="fields">
                <div class="row">
                    <div class="col-md-3">
                        {!! Form::label('is_process_through_embassy','Choose Status') !!}
                        {!! Form::select('is_process_through_embassy',\App\Services\GeneralService::yesOrNoForDropdown(),null,['class'=>'form-control select2','style'=>'width:100%','id'=>'is_process_through_embassy','placeholder'=>'Select Option','onchange'=>'manageYesNoStatus(this,"pte");']) !!}
                    </div>
                </div>
                <div class="row pte_holder h-force-flex">
                    <div class="row mb-2 ">
                        <div class="col-md-3">
                            {!! Form::label('pte_situated_in','Situated In') !!}
                            {!! Form::select('pte_situated_in',\App\Services\CountryService::countryDropDown(),null,['class'=>'form-control select2','id'=>'pte_situated_in','placeholder'=>"Select Country",'style'=>'width:100%;']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label('pte_dairy_number','Dairy No') !!}
                            {!! Form::text('pte_dairy_number',null,['class'=>'form-control ','id'=>'pte_dairy_number']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::label('pte_reg_date','Reg Date') !!}
                            {!! Form::text('pte_reg_date',null,['class'=>'form-control  datetime','id'=>'pte_reg_date']) !!}
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <h5>{{ __('general.by_person') }}</h5>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            @include('dashboard.common.single-hr-picker', [
                                'fieldName' => 'pte_by_person_id',
                                'for' => 'edit',
                                'records'=>\App\Services\PersonService::getHrById($model->is_process_through_embassy ?? null)])
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <h5>{{ __('general.witness_1') }}</h5>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    {!! Form::label('pte_witness_1_name','Name') !!}
                                    {!! Form::text('pte_witness_1_name',null,['class'=>'form-control ','id'=>'pte_witness_1_name']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('pte_witness_1_cnic','CNIC') !!}
                                    {!! Form::text('pte_witness_1_cnic',null,['class'=>'form-control ','id'=>'pte_witness_1_cnic']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('pte_witness_1_contact','Contact') !!}
                                    {!! Form::text('pte_witness_1_contact',null,['class'=>'form-control ','id'=>'pte_witness_1_contact']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <h5>{{ __('general.witness_2') }}</h5>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    {!! Form::label('pte_witness_2_name','Name') !!}
                                    {!! Form::text('pte_witness_2_name',null,['class'=>'form-control ','id'=>'pte_witness_2_name']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('pte_witness_2_cnic','CNIC') !!}
                                    {!! Form::text('pte_witness_2_cnic',null,['class'=>'form-control ','id'=>'pte_witness_2_cnic']) !!}
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('pte_witness_2_contact','Contact') !!}
                                    {!! Form::text('pte_witness_2_contact',null,['class'=>'form-control ','id'=>'pte_witness_2_contact']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
