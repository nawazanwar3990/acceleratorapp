<div class="accordion-item">
    <h2 class="accordion-header" id="flat_detail_heading">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flat_detail"
                aria-expanded="true" aria-controls="collapseOne">
            {{ __('general.flat_detail') }}
        </button>
    </h2>

    <div id="flat_detail" class="accordion-collapse collapse bg-white" aria-labelledby="headingOne"
         data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="fields">

                <div class="row">
                    <div class="col-md-4">
                        {!! Form::label('flat_id',__('general.ph_flat_name')) !!}
                        {!! Form::select('flat_id',\App\Services\FlatService::FlatForDropdown(),null,['class'=>'select2 form-control','style'=>'width:100%','id'=>'flat_id','readonly','placeholder'=>'Select Flat','onchange'=>'mapFlat("flat_id","flat");']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('flat_name',__('general.flat_name')) !!}
                        {!! Form::text('flat_name',null,['class'=>'form-control flat_name','id'=>'flat_name','readonly']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('flat_number',__('general.flat_number')) !!}
                        {!! Form::text('flat_number',null,['class'=>'form-control flat_number','id'=>'flat_number','readonly']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('flat_type_id',__('general.flat_type')) !!}
                        {!! Form::text('flat_type_id',null,['class'=>'form-control flat_type_id','id'=>'flat_type_id','readonly']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('flat_facing',__('general.facing')) !!}
                        {!! Form::text('flat_facing',null,['class'=>'form-control flat_facing','id'=>'flat_facing','readonly']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('flat_view',__('general.view_location')) !!}
                        {!! Form::text('flat_view',null,['class'=>'form-control flat_view','id'=>'flat_view','readonly']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('flat_area',__('general.area')) !!}
                        {!! Form::text('flat_area',null,['class'=>'form-control flat_area','id'=>'flat_area','readonly']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

