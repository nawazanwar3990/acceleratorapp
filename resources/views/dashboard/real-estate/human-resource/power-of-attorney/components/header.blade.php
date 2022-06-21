<div class="accordion-item">
    <h2 class="accordion-header" id="header_heading">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#header"
                aria-expanded="true" aria-controls="collapseOne">
            {{ __('general.attorney_registration') }}
        </button>
    </h2>

    <div id="header" class="accordion-collapse collapse show bg-white" aria-labelledby="headingOne"
         data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="fields">

                <div class="row mb-5">
                    <div class="col-4">
                        {!! Form::label('attorney_purpose',__('general.attorney_purpose')) !!}
                        {!! Form::select('attorney_purpose',\App\Services\GeneralService::poaPurposeForDropdown(),null,['id' => 'attorney_purpose', 'class' => 'form-control select2','placeholder'=>'Select Option']) !!}
                    </div>
                    <div class="col-4">
                        {!! Form::label('reg_sr',__('general.poa_id')) !!}
                        {!! Form::text('reg_sr',null,['class'=>'form-control','id'=>'poa_reg_sr','readonly']) !!}
                    </div>
                    <div class="col-4">
                        {!! Form::label('reg_date', __('general.reg_date'))!!}
                        <div class="input-group">
                            {!!  Form::text('reg_date',\App\Services\GeneralService::formatDate((isset($for) ? $model->date : \Carbon\Carbon::today())),['id'=>'reg_date','class'=>'form-control datepicker', 'autocomplete'=>'off']) !!}
                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
