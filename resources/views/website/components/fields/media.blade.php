@if(in_array($extra_field_for,['individual','mentor']))
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xl-6 col-xxl-6">
            <div class="card mb-0">
                <div class="card-header">
                    <h6 class="card-title mb-0">{{trans('general.id_card_front')}}</h6>
                </div>
                <div class="card-body py-3 px-1">
                    {!! Form::file('id_card_front',['class'=>'dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp','data-default-file'=>(isset($model->front_id_card) && count($model->front_id_card))?asset($model->front_id_card[0]->filename):'']) !!}
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xl-6 col-xxl-6">
            <div class="card mb-0">
                <div class="card-header">
                    <h6 class="card-title mb-0">{{trans('general.id_card_back')}}</h6>
                </div>
                <div class="card-body py-3 px-1">
                    {!! Form::file('id_card_back',['class'=>'dropify', 'data-height' => '75', 'data-allowed-file-extensions' => 'jpg jpeg png bmp','data-default-file'=>(isset($model->back_id_card) && count($model->back_id_card))?asset($model->back_id_card[0]->filename):'']) !!}
                </div>
            </div>
        </div>
    </div>
@endif

