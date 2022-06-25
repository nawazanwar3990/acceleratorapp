<div class="accordion-item">
    <h2 class="accordion-header" id="attorny_detail_heading">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#attorny_detail"
                aria-expanded="true" aria-controls="collapseOne">
            {{ __('general.attorney_detail') }}
        </button>
    </h2>

    <div id="attorny_detail" class="accordion-collapse collapse bg-white" aria-labelledby="headingOne"
         data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="fields">

                <div class="row mb-5">
                    <div class="col-md-12">
                        <h5>{{ __('general.executant') }}</h5>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        @include('dashboard.common.single-hr-picker',
                        [
                            'fieldName' => 'executant_hr_id',
                            'for' => 'edit',
                            'records'=>\App\Services\PersonService::getHrById($model->executant_hr_id ?? null)])
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <h5>{{ __('general.authorised_attorney') }}</h5>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        @include('dashboard.common.single-hr-picker',
                        [
                            'fieldName' => 'auth_attorney_hr_id',
                            'for' => 'edit',
                            'records'=>\App\Services\PersonService::getHrById($model->auth_attorney_hr_id ?? null)])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        {!! Form::label('relation_type_id',__('general.relation_with_executant')) !!}
                        {!! Form::select('relation_type_id',\App\Services\PersonService::relationsForDropdown(),null,['class'=>'form-control select2','id'=>'poa_relation_type_id','placeholder'=>'Select Relation','style'=>'width:100%']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
